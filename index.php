<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "microsoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT number_ FROM contect_us WHERE id = 1";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $number = $row['number_'];

    // Display the number
    echo "Number: " . $number;
} else {
    echo "Error fetching data: " . mysqli_error($your_db_connection);
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Font Awesome CDN Link  -->
    <script src="assets/font-awesome/fontawesome.min.js" crossorigin="anonymous"></script>

    <!-- JQuery link  -->
    <script src="assets/jQuery/jquery.min.js"></script>
    <title>Microsoft pop-up</title>
</head>

<body>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger modal -->
                <div class="ms-5 d-flex justify-content-center gap-2 py-1 d-none">
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        1st Modal
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        2nd Modal
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3">
                        3rd Modal
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- 1st Modal -->

    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header justify-content-between align-items-center d-flex header_modal">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="assets/image/logo.png"
                                class="me-2" alt="logo" width="70">Microsoft 365
                        </h1>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div>
                            <button type="button" class="btn btn-outline-primary shadow-none">Activate license</button>
                        </div>
                        <div>
                            <span><i class="fa-solid fa-gear"></i></span>
                        </div>
                    </div>
                </div>
                <div class="modal-body" data-bs-auto-close="none">
                    <div class="container">
                        <div class="card border-0" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;">
                            <div class="border-bottom px-4">
                                <h1>Quick Scan</h1>
                            </div>
                            <div class="row">
                                <div class="col mx-5 px-0">
                                    <div class="progress" style="height: 30px;">
                                        <div id="dynamic" class="progress-bar progress-bar-primary active"
                                            role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 0%">
                                            <span id="current-progress"></span>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold">Objects scanned</td>
                                                <td class="fw-bold">9,342</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Time elasped</td>
                                                <td class="fw-bold">5 secs</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Threads found</td>
                                                <td class="fw-bold text-danger">5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" justify-content-between align-items-end d-flex header_modal p-3">
                                <div class="d-flex gap-3 mt-5">
                                    <div>
                                        <button type="button" class="btn btn-outline-secondary">Push</button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline-secondary">Scheduled scans</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2nd modal  -->

    <div class="modal fade pt-5" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog my-0 mx-auto">
            <div class="modal-content bg-primary">
                <div class="modal-header border-0 justify-content-center py-2">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Windows-defender - security warning
                    </h1>
                </div>
                <div class="modal-body p-0 px-2 text-white">
                    <p class="text-uppercase" style="font-size: 14px;">**Access to this PC has been blocked
                        For security reasons**</p>
                    <p>Your computer has alerted us that it has been infected with a trojan Spyware. The following data
                        has been compromised</p>
                    <p class="mb-0">> Email Credenbals</p>
                    <p class="mb-0">> Banking password</p>
                    <p class="mb-0">> Facebook login</p>
                    <p>> Pictures and Documents</p>
                    <p>Windows-defender scan has found potentially unwanted adware on this device that can steal your
                        password, online identity, Licence information, personal files, pictures and documents.</p>
                    <p>You must contact us immediately So that over engineers can walk Through the The removal process
                        our the point</p>
                    <p>Call Microsoft support immediately To report this thread Prevent identity thread And unlock to
                        this device</p>
                    <p>Closing this window Will put personal information at risk and to a suspension of your window
                        registration</p>
                    <h6 class="fw-normal">Call Microsoft support <span class="fw-bold">+1(855) 946 1201 (Security
                            Helpline)</span> </h6>
                </div>
                <div class="text-end">
                    <div class="gap-3 d-flex justify-content-end px-2 py-2">
                        <button type="button" class="btn btn-outline-light shadow-none">Cancel</button>
                        <button type="button" class="btn btn-outline-light shadow-none"
                            style="padding: 0 20px;">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <!-- 3rd modal  -->

    <div class="modal fade pt-5" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content px-5">
                <div class="modal-header">
                    <div>
                        <h1 class="modal-title fs-3 fw-bold" id="exampleModalLabel"><img
                                src="assets/image/littleshape.png" class="me-2" alt="logo" width="40">Windows Defender
                            Security Center
                        </h1>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <h5 class="text-danger fw-bold">App: Ads.fiancetrack(2).dll</h5>
                    <h5 class="text-danger fw-bold">Threat Detected: Trojan Spyware</h5>
                    <div class="images">
                        <img src="assets/image/incomingmail.png" alt="incomingmail" width="150" class="img-fluid">
                        <img src="assets/image/littleshape.png" alt="logo" width="40" class="img-fluid">
                        <img src="assets/image/incomingmail.png" alt="incomingmail" width="150" class="img-fluid">
                    </div>
                    <h5 class="fw-bold">Access to this Computer has been blocked for security reasons.</h5>
                    <h5 class="fw-bold" style="color: cornflowerblue;">Microsoft Helpline: <span>+<?=$number?>
                            (Toll-Free)</span></h5>
                </div>
                <div class="modal-footer justify-content-between align-items-center d-flex">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="assets/image/logo.png"
                                class="me-2" alt="logo" width="70">Microsoft 365
                        </h1>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <button type="button" class="btn btn-lg btn-outline-dark shadow-none">Deny</button>
                        <button type="button" class="btn btn-lg btn-primary shadow-none">Scan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/main.js"></script>
</body>

</html>