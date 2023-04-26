<?php
    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user_type']) || !in_array($_SESSION['user_type'], ['Admin', 'Cashier', 'Reservation Specialist'])){
        header('location: ../login/login.php');
    }

    require_once '../../classes/accommodation.class.php';
    require_once '../tools/variables.php';
    $page_title = 'Azzura | Reservation';
    $reservation = 'active';

    require_once '../includes/header.php';
?>
<style>
    form {
        border: 2px solid #ccc;
        padding: 2rem;
        border-radius: 5px;
    }
    .main-container {
        max-width: 50rem;
        margin: 0 auto;
        padding-top: 5vh;
        padding-bottom: 5vh;
    }
    .sub-container {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 2rem;
        margin-bottom: 1rem;
    }
    .sub-container-header {
        position: relative;
        top: -2.7rem;
        left: -1.5rem;
        background: #fff;
        display: inline-block;
        padding: 0 1rem;
    }
    .invalid-feedback {
        display: none;
    }

    .is-invalid ~ .invalid-feedback {
        display: block;
    }
    .container-width {
        width: 100%;
    }
    body > main > form > div:nth-child(1) > a{
        position: absolute;
        right: 11rem;
        text-decoration: none;
        color: red;
        font-weight: 900;
    }
    body > main > form > div.main-container > div:nth-child(4){
        font-weight: 900;
    }
    .is-invalid {
        border-color: red !important;
    }
</style>
<body>
    <?php require_once '../includes/sidebar.php'; ?>

    <main class="bg-light">
        <div class="p-2">
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Reservation</h5>
                <div class="dropdown me-3 d-none d-sm-block">
                    <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-notification-line"><span class="position-absolute top-30 start-20 translate-middle p-2 bg-danger border border-light rounded-circle"></i>
                    </div>
                    <?php require_once '../includes/topnav.php'; ?>
                </div>
            </nav>
        <form method="POST" action="" onsubmit="return validateFields()" class="needs-validation" novalidate>
           <div style="width: 20%;">
                <h5>ADD RESERVATION</h5>
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <a href="#" onclick="goBack()" class="me-3"><i class="ri-arrow-left-line"></i>BACK</a>
           </div>
            <div class="main-container">
                <div class="sub-container container-width">
                    <h5 class="sub-container-header">Personal Information</h5>
                    <!-- Personal Information fields -->
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name (required):</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="First Name">
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-circle-fill"></i> First Name is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name (optional):</label>
                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name (required):</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Last Name">
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-circle-fill"></i> Last Name is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (required):</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="e.g example@gmail.com">
                        <div class="invalid-feedback" id="emailRequired">
                            <i class="bi bi-exclamation-circle-fill"></i> Email is required.
                        </div>
                        <div class="invalid-feedback" id="emailInvalid" style="display: none;">
                            <i class="bi bi-exclamation-circle-fill"></i> Email is in an incorrect format.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Mobile Number (required):</label>
                        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-circle-fill"></i> Contact Number is required.
                        </div>
                    </div>
                </div>
                <!-- Accommodation Information -->
                <div class="sub-container container-width">
                    <h5 class="sub-container-header">Accommodation Information</h5>
                    <!-- Accommodation Information fields -->
                    <div class="mb-3">
                        <label for="accommodation_type" class="form-label">Accommodation Type:</label>
                        <select class="form-select" id="accommodation_type" name="accommodation_type" onchange="updateAccommodationOptions()">
                            <option value="hotel_rooms">Hotel Rooms</option>
                            <option value="villas">Villas</option>
                            <option value="cottages">Cottages</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="accommodation" class="form-label">Accommodation:</label>
                        <select class="form-select" id="accommodation" name="accommodation" onchange="fetchAccommodationData()">
                            <!-- Options will be populated based on the accommodation type -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="check_in_date " class="form-label">Check-in Date:</label>
                        <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="check_out_date" class="form-label">Check-out Date:</label>
                        <input type="date" class="form-control" id="check_out_date" name="check_out_date" required>
                    </div>
                    <div class="mb-3" id="cottages_extra" style="display:none;">
                        <label for="cottage_time" class="form-label">Cottage Time:</label>
                        <select class="form-select" id="cottage_time" name="cottage_time">
                            <option value="daytime">Daytime</option>
                            <option value="nighttime">Nighttime</option>
                            <option value="day-night">Day-Night</option>
                        </select>
                    </div>
            </div>

             <!-- Additional Information -->
             <div class="sub-container container-width">
                    <h5 class="sub-container-header">Additional Information</h5>
                    <!-- Additional Information fields -->
                <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity:</label>
                        <input type="number" class="form-control" id="capacity" name="capacity" disabled>
                    </div>
                <div class="mb-3">
                    <label for="free_entrance" class="form-label">Free Entrance:</label>
                    <input type="text" class="form-control" id="free_entrance" name="free_entrance">
                </div>
                <div class="mb-3">
                    <label>Inclusion:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Inclusion1" id="inclusion1" name="inclusions[]">
                        <label class="form-check-label" for="inclusion1">Inclusion 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Inclusion2" id="inclusion2" name="inclusions[]">
                        <label class="form-check-label" for="inclusion2">Inclusion 2</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
            </div>
        <div class="sub-container container-width">
                <div class="mt-3">
                    <a href="#" onclick="openAddAccommodationModal()" class="me-3">Add Accommodation</a>
                    <a href="#" onclick="openAddAmenitiesModal()" class="me-3">Add Amenities</a>
                </div>
                <div class="mt-3">
                    <a href="#" onclick="openGuestListModal()">Guest List(Click to View and Insert Guest)</a>
                </div>
        </div>
        <div class="mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary">Clear</button>
        </div>
        </div>
        </form>
    </div>
</div>
</main>
<script>
    function goBack() {
        window.history.back();
    }

    function validateFields() {
    let isValid = true;

    // Validation for first name
    const firstName = document.getElementById('firstName');
    if (firstName.value.trim() === '') {
        firstName.classList.add('is-invalid');
        isValid = false;
    } else {
        firstName.classList.remove('is-invalid');
    }

    // Validation for last name
    const lastName = document.getElementById('lastName');
    if (lastName.value.trim() === '') {
        lastName.classList.add('is-invalid');
        isValid = false;
    } else {
        lastName.classList.remove('is-invalid');
    }

    // Validation for email
    const email = document.getElementById('email');
    const emailRegex = /^([\w-]+(\.[\w-]+)*)@((gmail\.com|yahoo\.com|wmsu\.edu\.ph))$/;
    if (email.value.trim() === '') {
        email.classList.add('is-invalid');
        document.getElementById('emailRequired').innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Email is required.';
        document.getElementById('emailInvalid').innerHTML = '';
        isValid = false;
    } else if (!emailRegex.test(email.value.trim())) {
        email.classList.add('is-invalid');
        document.getElementById('emailRequired').innerHTML = '';
        document.getElementById('emailInvalid').innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Email is in an incorrect format.';
        isValid = false;
    } else {
        email.classList.remove('is-invalid');
        document.getElementById('emailRequired').innerHTML = '';
        document.getElementById('emailInvalid').innerHTML = '';
    }
        // Validation for contact number
        const contactNumber = document.getElementById('contact_number');
    const contactNumberRegex = /^\d{11}$/;
    if (contactNumber.value.trim() === '') {
        contactNumber.classList.add('is-invalid');
        contactNumber.nextElementSibling.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Contact Number is required.';
        isValid = false;
    } else if (!contactNumberRegex.test(contactNumber.value.trim())) {
        contactNumber.classList.add('is-invalid');
        contactNumber.nextElementSibling.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> The mobile number must be an 11-digit number.';
        isValid = false;
    } else {
        contactNumber.classList.remove('is-invalid');
    }
    return isValid;
    }

    document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    event.stopPropagation();
    const formIsValid = validateFields();
    if (formIsValid) {
        // Submit the form or perform desired action when the form is valid.
    } else {
        this.classList.add('was-validated');
    }
});
</script>
<?php require_once '../includes/dashboard_footer.php'; ?>
<?php require_once '../includes/footer.php'; ?>