<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['save_hotelrooms'])) {
  $promo_code = $_POST['promo_code'];
  $promo_name = $_POST['promo_name'];
  $minimum_amount = $_POST['minimum_amount'];
  $discount_value = $_POST['discount_value'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $status = $_POST['status'];

  $query = "INSERT INTO promo (promo_code, promo_name, minimum_amount, discount_value, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->execute([$promo_code, $promo_name, $minimum_amount, $discount_value, $start_date, $end_date, $status]);

  if($stmt->rowCount() > 0) {   
    $_SESSION['status'] = "Successfully Saved";
    header('Location: promo.php');
  } else {
    $_SESSION['status'] = "Not Saved";
    header('Location: promo.php');
  }
}

// View Hotelrooms
if(isset($_POST['checking_viewbtn'])) {
  $h_id = $_POST['promo_id'];

  $query = "SELECT * FROM promo WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$h_id]);

  if($stmt->rowCount() > 0) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo $return = '
        <h5> Promo Code : '.$row['promo_code'].' </h5>
        <h5> Promo Name : '.$row['promo_name'].' </h5>
        <h5> Minimum Amount : '.$row['minimum_amount'].' </h5>
        <h5> Discount Value : '.$row['discount_value'].' </h5>
        <h5> Start Date : '.$row['start_date'].' </h5>
        <h5> End Date : '.$row['end_date'].' </h5>
        <h5> Status : '.$row['status'].' </h5>
      '; 
    }
  } else {
    echo $return = "<h5> No Record Found</h5>";
  }
}

// Edit Hotelrooms
if(isset($_POST['checking_edit_btn'])) {
  $h_id = $_POST['promo_id'];
  $result_array = [];

  $query = "SELECT * FROM promo WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$h_id]);

  if($stmt->rowCount() > 0) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      array_push($result_array, $row);
      header('Content-type: application/json');
      echo json_encode($result_array);
    }
  } else {
    echo $return = "<h5> No Record Found</h5>";
  }
}

if(isset($_POST['update_hotelrooms'])) {
    $id = $_POST['edit_id'];
    $promo_code = $_POST['promo_code'];
    $promo_name = $_POST['promo_name'];
    $minimum_amount = $_POST['minimum_amount'];
    $discount_value = $_POST['discount_value'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];
  
    try {
      $conn = new PDO("mysql:host=localhost;dbname=testing", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      $query = "UPDATE promo SET promo_code=:promo_code, promo_name=:promo_name, minimum_amount=:minimum_amount, discount_value=:discount_value, start_date=:start_date, end_date=:end_date, status=:status WHERE id=:id";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':promo_code', $promo_code);
      $stmt->bindParam(':promo_name', $promo_name);
      $stmt->bindParam(':minimum_amount', $minimum_amount);
      $stmt->bindParam(':discount_value', $discount_value);
      $stmt->bindParam(':start_date', $start_date);
      $stmt->bindParam(':end_date', $end_date);
      $stmt->bindParam(':status', $status);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
  
      $_SESSION['status'] = "Successfully Updated";
      header('Location: promo.php');
    } catch(PDOException $e) {
      $_SESSION['status'] = "Something Went Wrong.";
      header('Location: promo.php');
    }
  }


  if(isset($_POST['delete_hotelroom'])) {
  $id = $_POST['promo_id'];

  try {
    $pdo = new PDO("mysql:host=localhost;dbname=testing", "root", "");

    $stmt = $pdo->prepare("DELETE FROM promo WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    $_SESSION['status'] = "Successfully Deleted";
    header('Location: promo.php');
  } catch(PDOException $e) {
    $_SESSION['status'] = "Oh SHIT Something Went Wrong.";
    header('Location: promo.php');
  }
}

?>