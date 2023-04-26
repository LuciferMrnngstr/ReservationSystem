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
  $dname = $_POST['dname'];
  $dtype = $_POST['dtype'];
  $dvalue = $_POST['dvalue'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $status = $_POST['status'];

  $query = "INSERT INTO discounts (dname, dtype, dvalue, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->execute([$dname, $dtype, $dvalue, $start_date, $end_date, $status]);

  if($stmt->rowCount() > 0) {   
    $_SESSION['status'] = "Successfully Saved";
    header('Location: discount.php');
  } else {
    $_SESSION['status'] = "Not Saved";
    header('Location: discount.php');
  }
}

// View Hotelrooms
if(isset($_POST['checking_viewbtn'])) {
  $h_id = $_POST['discount_id'];

  $query = "SELECT * FROM discounts WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$h_id]);

  if($stmt->rowCount() > 0) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo $return = '
        <h5> Discount Name : '.$row['dname'].' </h5>
        <h5> Discount Type : '.$row['dtype'].' </h5>
        <h5> Discount Value : '.$row['dvalue'].' </h5>
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
  $h_id = $_POST['discount_id'];
  $result_array = [];

  $query = "SELECT * FROM discounts WHERE id = ?";
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
    $dname = $_POST['dname'];
    $dtype = $_POST['dtype'];
    $dvalue = $_POST['dvalue'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];
  
    try {
      $conn = new PDO("mysql:host=localhost;dbname=testing", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      $query = "UPDATE discounts SET dname=:dname, dtype=:dtype, dvalue=:dvalue, start_date=:start_date, end_date=:end_date, status=:status WHERE id=:id";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':dname', $dname);
      $stmt->bindParam(':dtype', $dtype);
      $stmt->bindParam(':dvalue', $dvalue);
      $stmt->bindParam(':start_date', $start_date);
      $stmt->bindParam(':end_date', $end_date);
      $stmt->bindParam(':status', $status);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
  
      $_SESSION['status'] = "Successfully Updated";
      header('Location: discount.php');
    } catch(PDOException $e) {
      $_SESSION['status'] = "Something Went Wrong.";
      header('Location: discount.php');
    }
  }


  if(isset($_POST['delete_hotelroom'])) {
    $id = $_POST['discount_id'];
  
    try {
      $pdo = new PDO("mysql:host=localhost;dbname=se_azzurabeach", "root", "");
  
      // First, select the discount record to be deleted
      $selectStmt = $pdo->prepare("SELECT * FROM discounts WHERE id=:id");
      $selectStmt->bindParam(":id", $id, PDO::PARAM_INT);
      $selectStmt->execute();
      $discount = $selectStmt->fetch(PDO::FETCH_ASSOC);
  
      // Check if 'dname' exists and is not null or empty
      if (isset($discount['dname']) && !is_null($discount['dname']) && trim($discount['dname']) !== '') {
        // Then, insert the discounts record into the discountarchived table
        $insertStmt = $pdo->prepare("INSERT INTO discountarchived (dname, dtype, dvalue, start_date, end_date, status, user_who_delete, date_deleted) VALUES (:dname, :dtype, :dvalue, :start_date, :end_date, :status, :user_who_delete, NOW())");
        $insertStmt->bindParam(":dname", $discount['dname'], PDO::PARAM_STR);
        $insertStmt->bindParam(":dtype", $discount['dtype'], PDO::PARAM_STR);
        $insertStmt->bindParam(":dvalue", $discount['dvalue'], PDO::PARAM_INT);
        $insertStmt->bindParam(":start_date", $discount['start_date'], PDO::PARAM_STR);
        $insertStmt->bindParam(":end_date", $discount['end_date'], PDO::PARAM_STR);
        $insertStmt->bindValue(":status", $discount['status'], PDO::PARAM_STR);
        $insertStmt->bindValue(":user_who_delete", $_SESSION['fullname'], PDO::PARAM_STR);
        $insertStmt->execute();
  
        $stmt = $pdo->prepare("DELETE FROM discounts WHERE id=:id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
  
        $_SESSION['status'] = "Successfully Deleted";
        header('Location: discount.php');
      } else {
        // Show an error message if 'dname' is null or empty
        $_SESSION['status'] = "Error: 'dname' cannot be null or empty";
        header('Location: discount.php');
      }
    } catch(PDOException $e) {
      $_SESSION['status'] = "Error: " . $e->getMessage();
      header('Location: discount.php');
    }
  }

?>