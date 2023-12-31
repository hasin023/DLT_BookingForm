<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT DLT</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background: #004B49;">
            <div class="col-md-3 col-6 d-none d-md-flex justify-content-center align-items-center mt-3">
                <img src="iutlogo/IUT_logo_v_1.png" style="width: 70px;" class="logo">
            </div>
            <div class="col-12 col-md-6 tr-frhd mt-3 text-center" style="color: azure;">
                <h2>Islamic University of Technology</h2>
                <h4>Library and Documentation Office</h4>
                <h5>Distance Learning Theatre (DLT)</h5>
                <hr>
            </div>
            <div class="col-md-3 col-6 d-none d-md-flex justify-content-center align-items-center mt-3">
                <img src="iutlogo/oic.png" style="width: 90px;" class="logo">
            </div>
            <div class="container mb-3">
                <div class="row sh-menu-row" style="background: #00201f5e;">
                    <div class="sh-menu col-12 d-flex justify-content-center align-items-center">
                        <ul>
                            <li><a href="calendar/"><i class="uil uil-calendar-alt"></i> View Calender</a></li>
                            <li><a href="login/"><i class="uil uil-pen"></i> Book A Meeting</a></li>
                            <?php
                                session_start();
                                if (isset($_SESSION["email"])) {
                                    echo '<li><a href="admin/"><i class="uil uil-airplay"></i> Dashboard</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item images active">
                <img src="dltroomimages/front.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item images">
                <img src="dltroomimages/leftcorner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item images">
                <img src="dltroomimages/rightcorner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item images">
                <img src="dltroomimages/frontcorner.jpg" class=" d-block w-100" alt="...">
            </div>
            <div class="carousel-item images">
                <img src="dltroomimages/frontangle.jpg" class=" d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br>
    <div class="container mt-5 mb-2">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Distance Learning Theatre Facilities</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <div class="row mt-3">
            <div class="col-md-4 d-inline-block">
                <div class="box-card">Big Display</div>
                <div class="box-card">Smart Board</div>
                <div class="box-card">Projector</div>
                <div class="box-card">Writing Board</div>
                <div class="box-card">Microphone (Wireless/Handheld)</div>
                <div class="box-card">Laptop</div>
                
            </div>
            <div class="col-md-4 d-inline-block">
                <div class="box-card">Photography</div>
                <div class="box-card">WiFi</div>
                <div class="box-card">Technical Person</div>
                <div class="box-card">Zoom Support (inform at least 5 days earlier for BdREN technical support)</div>
                <div class="box-card">Front Desk with Table Cloth</div>
                <div class="box-card">Additional Chairs</div>
            </div>
            <div class="col-md-4 d-inline-block">
                <div class="box-card">Flower with Vase</div>
                <div class="box-card">Video Recording</div>
                <div class="box-card">Cafeteria Arrangement [Food and Services are arranged by a particular Department/Office</div>
                <div class="box-card">Own Arrangement by a Particular Department/Office (Food and Services are arranged by a particular Department/Office)</div>
                <!-- <div class="box-card">Additional Chairs</div> -->
            </div>
        </div>
    </div>
</body>
</html>