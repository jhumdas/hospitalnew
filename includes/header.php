<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">


    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- css link -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>

    <section class="header">
        <div class="topheader">
            <div class="custContainer">
                <div class="topHeadInn">
                    <div class="HeaderIconSide">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="headerDet">
                        <div class="lwrInnerRhtLi">
                            <div class="lwrRhtIconDiv">
                                <i class="fa-solid fa-truck-medical"></i>
                            </div>
                            <p class="lwrInrPara">24/7 AVAILABILITY</p>
                        </div>
                        <div class="lwrInnerRhtLi">
                            <div class="lwrRhtIconDiv">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p class="lwrInrPara">+91 9564090990</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageheader">
            <div class="midheader">
                <div class="custContainer">
                    <div class="midheaderInn">
                        <a href="index.php">
                            <div class="headerLogoDiv">
                                <figure class="headLogoFig">
                                    <img src="assets/images/logo.png" alt="logo">
                                </figure>
                                <h4 class="HeadLogoTxt">Lifeline Multispeciality Hospital</h4>
                            </div>
                        </a>
                        <div class="SerInpDiv">
                            <input type="search" placeholder="find hospitals, locations, doctors..">
                            <button class="headSerBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="headCallDiv">
                            <div class="headCerti">
                                <img src="assets/images/certify-award.jpg" alt="img">
                            </div>
                            <div class="d-flex" style="position: relative;">
                                <div class="headCard" style="background-color: #DB0B20; margin-right: 2px; ">
                                    <h5>EMERGENCY</h5>
                                    <p>1066</p>
                                </div>
                                <div class="headCard" style="background-color: #224855;">
                                    <h5>LIFELINE</h5>
                                    <p>+91 9564090990</p>
                                </div>
                                <div class="avlblimg">
                                    <img src="assets/images/24by7.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="RespMenu">
                            <ul class="respHeadUl">
                                <li class="respHeadLi"><a href="#" class="respHeadLiAn"><i class="fa-solid fa-truck-medical"></i></a></li>
                                <li class="respHeadLi"><a href="#" class="respHeadLiAn"><i class="fa-solid fa-phone"></i></a></li>
                                <li class="respHeadLi" id="ResSerBtn"><button class="respHeadLiAn"><i class="fa-solid fa-magnifying-glass"></i></button></li>
                                <li class="respHeadLi" onclick="openSideBar()"><button class="respHeadLiAn"><i class="fa-solid fa-bars-staggered"></i></button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="searchDivRes">
                        <div class="serDivResInn">
                            <input type="search" placeholder="Find hospitals, locations, doctors..." class="searchDivResInp">
                            <div class="searchDivResIcon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btmheader">
                <div class="custContainer">
                    <div class="btmheaderInn">
                        <ul class="btmHeaderUl">
                            <li><a href="index.php" class="headNavLink">Home</a></li>
                            <li><a href="about.php" class="headNavLink">About Us</a></li>
                            <li><a href="services.php" class="headNavLink">Facilities & Services</a></li>
                            <li><a href="department.php" class="headNavLink">Departments</a></li>
                            <li><a href="doctors.php" class="headNavLink">Doctors</a></li>
                            <li><a href="careers.php" class="headNavLink">Careers</a></li>
                            <li><a href="contact.php" class="headNavLink">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sidebar menu -->

    <section class="sidebarSection">
        <div class="innerSidebar">
            <button class="closeSidebarBtn" onclick="closeSideBar()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="sidebarTop">
                <a href="index.php">
                    <div class="sideLogoDiv">
                        <figure class="sideLogoFig">
                            <img src="assets/images/logo.png" alt="logo">
                        </figure>
                        <h4 class="SideLogoTxt">Lifeline Multispeciality Hospital</h4>
                    </div>
                </a>
            </div>
            <div class="sidebarBtm">
                <ul class="sidebarUl">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Facilities & Services</a></li>
                    <li><a href="department.php">Departments</a></li>
                    <li><a href="doctors.php">Doctors</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>