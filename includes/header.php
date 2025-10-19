<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basu’s Clinic | Healthcare Pvt Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">\
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/js/main.js">
</head>

<body>
    <!-- Top contact bar -->
    <div class="bg-light border-bottom py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- LEFT: logos (two clickable images) -->
            <div class="d-flex align-items-center gap-4">
                <!-- first image: goes to index.php (same tab) -->
                <a href="index.php" class="d-inline-block" title="Home">
                    <img src="assets/img/basu.png" alt="Basu's Clinic logo" style="height:55px; width:auto;">
                </a>
                <div class="vr"></div>

                <!-- second image: opens external site in new tab -->
                <a href="https://nabh.co/" class="d-inline-block" title="NABH" target="_blank" rel="noopener">
                    <img src="assets/img/logo.png" alt="NABH logo" style="height:50px; width:auto;">
                </a>
            </div>

            <!-- RIGHT: buttons & numbers -->
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-success btn-sm me-3">ENQUIRY</a>
                <span class="me-3 fw-bold text-dark">+91 78109 00343</span>
                <span class="me-3 fw-bold text-dark">+91 353 243 0966</span>
                <button class="btn btn-outline-danger btn-sm">SEARCH</button>
            </div>
        </div>
    </div>



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="departmentsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <div class="dropdown-menu w-100 mt-0 border-0 rounded-0" aria-labelledby="departmentsDropdown"
                            style="left: 0;">
                            <div class="container-fluid py-4 px-0">
                                <div class="row row-cols-1 row-cols-md-3 g-0">
                                    <div class="col">
                                        <a class="dropdown-item department-link"
                                            href="#"><!-- <img src="your-icon.svg" class="me-2"/> --> Gyane &
                                            Obstetrics</a>
                                        <a class="dropdown-item department-link" href="#">Paediatrics</a>
                                        <a class="dropdown-item department-link" href="#">Orthopaedics</a>
                                        <a class="dropdown-item department-link" href="#">Neurology</a>
                                        <a class="dropdown-item department-link" href="#">Pathology</a>
                                        <a class="dropdown-item department-link" href="#">Radiology</a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item department-link" href="#">General Medicine</a>
                                        <a class="dropdown-item department-link" href="#">Urology</a>
                                        <a class="dropdown-item department-link" href="#">Cardiology</a>
                                        <a class="dropdown-item department-link" href="#">ENT</a>
                                        <a class="dropdown-item department-link" href="#">Anaesthesia</a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item department-link" href="#">General & Laparoscopy
                                            Surgery</a>
                                        <a class="dropdown-item department-link" href="#">Gastroenterology</a>
                                        <a class="dropdown-item department-link" href="#">Critical Care</a>
                                        <a class="dropdown-item department-link" href="#">Maxillofacial Surgery</a>
                                        <a class="dropdown-item department-link" href="#">Pulmonology</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Patient Corner</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Media</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">News</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <a href="appointment.php" class="btn btn-primary ms-auto">APPOINTMENT</a>
            </div>
        </div>
    </nav>