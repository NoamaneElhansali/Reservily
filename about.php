<?php
session_start();
 if(isset($_SESSION["em_vl"])){
    if($_SESSION["em_vl"] == null){
        header("Location: authentication-login.php");
    }
 }else{
    header("Location: authentication-login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reservily - about</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary w-50"><img src="img/Reservily.png" alt="" id="logo"></h1>
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon" ></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.php" class="nav-item nav-link active">À propos de nous</a>
                        <a href="commingSoon.php" class="nav-item nav-link">Tarifs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                            <div class="dropdown-menu m-0">
                                <a href="redezvous.php" class="dropdown-item">Rendez-vous Onligne</a>
                                <a href="commingSoon.php" class="dropdown-item">Produit parapharmacie</a>
                                <a href="commingSoon.php" class="dropdown-item">
                                    Analyses médicales</a>
                                <a href="commingSoon.php" class="dropdown-item">Infirmier a domitié</a>
                            </div>
                        </div>
                        <a href="profile.php" class="nav-item nav-link">
                            <span class="material-symbols-outlined profile">
                                account_circle
                                </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- About the project Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/Medical-Animation-Explainer-Videos-scaled.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">À propos de nous</h5>
                        <h1 class="display-4">Reservily ton meilleurs choix pour une meilleurs santé</h1>
                    </div>
                    <p> Reservily, est une plateforme logicielle conçue pour accompagner les individus dans la gestion de leur santé et de leur bien-être.  Notre plateforme sert d'intermédiaire entre les patients, les médecins, les infirmières et les autres autorités de santé, résolvant les problèmes qui empêchaient auparavant les résidents d'accéder à la qualité. soins de santé.  Avec notre plateforme, les patients peuvent profiter d’une expérience de santé saine et confortable</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Docteurs<small class="d-block text-primary">Qualifié</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Infermiers<small class="d-block text-primary">Pour le soins</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Livrasion<small class="d-block text-primary">des Tests</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Produits<small class="d-block text-primary">Parapharmacie</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About the project End -->


    <!-- Doctors service Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Trouvé un Docteur</h5>
                <h1 class="display-5 mb-4">Prendre des rendez-vous en ligne avec les docteurs</h1>
                <h5 class="text-white fw-normal">Notre plateforme permet aux patients de prendre rendez-vous en ligne avec des médecins et des spécialistes.</h5>
            </div>
            <!-- <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div> -->
        </div>
    </div>



    <div class="container-fluid bg-white my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Infermiers toujours prés</h5>
                <h1 class="display-5 mb-4">Demander dans le confort de ton foyer</h1>
                <h5 class="text-dark fw-normal">DIA Médicaux offre le service de demander à une infirmière de fournir des services de soins de santé de base dans le confort de son foyer</h5>
            </div>
            <!-- <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Doctors service End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Produits semi-médicaux</h5>
                <h1 class="display-4">Bon qualité et toujours disponible</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item w-75">
                    <div class="d-flex flex-column g-0 bg-light rounded overflow-hidden">
                        <div class="col-12">
                            <img class="img-fluid" src="img/team-1.jpg" style="height: 400px;">
                        </div>
                        <div class="col-12 d-flex flex-column">
                            <div class="mt-auto p-3">
                                <h3>Produit1</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> 
                            </div>
                            <div class="d-flex justify-content-center mt-auto border-top p-3">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a> 
                                <form action="" method="post">
                                    <button class="btn btn-primary w-100 py-2 px-2" type="submit">Pus details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item w-75">
                    <div class="d-flex flex-column g-0 bg-light rounded overflow-hidden">
                        <div class="col-12">
                            <img class="img-fluid" src="img/team-2.jpg" style="height: 400px;">
                        </div>
                        <div class="col-12 d-flex flex-column">
                            <div class="mt-auto p-3">
                                <h3>Produit2</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex justify-content-center mt-auto border-top p-3">
                                <form action="" method="post">
                                    <button class="btn btn-primary w-100 py-2 px-2" type="submit">Pus details</button>
                                </form>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item w-75">
                    <div class="d-flex flex-column g-0 bg-light rounded overflow-hidden">
                        <div class="col-12">
                            <img class="img-fluid" src="img/team-3.jpg" style="height: 400px;">
                        </div>
                        <div class="col-12 d-flex flex-column">
                            <div class="mt-auto p-3">
                                <h3>Produit3</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex justify-content-center mt-auto border-top p-3">
                                <form action="" method="post">
                                    <button class="btn btn-primary w-100 py-2 px-2" type="submit">Pus details</button>
                                </form>
                                <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">A propos</h4>
                    <p class="mb-4">Bénéficier d'une suivre médicale de haute qualité avec Reservily.</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>reservilydaba@gamil.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+212 659 983722</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Liens Rapides</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>À propos de nous</a>
                        <a class="text-light mb-2" href="commingSoon.html"><i class="fa fa-angle-right me-2"></i>Rendez-vous en ligne</a>
                        <a class="text-light mb-2" href="produitparapharmacique.html"><i class="fa fa-angle-right me-2"></i>Produits parapharmaceutiques</a>
                        <a class="text-light mb-2" href="commingSoon.html"><i class="fa fa-angle-right me-2"></i>Analyses médicales</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Liens Populaires</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>À propos de nous</a>
                        <a class="text-light mb-2" href="commingSoon.html"><i class="fa fa-angle-right me-2"></i>Rendez-vous en ligne</a>
                        <a class="text-light mb-2" href="produitparapharmacique.html"><i class="fa fa-angle-right me-2"></i>Produits parapharmaceutiques</a>
                        <a class="text-light mb-2" href="commingSoon.html"><i class="fa fa-angle-right me-2"></i>Analyses médicales</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Votre Addresse Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="commingSoon.html"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61555541244107&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.instagram.com/reservilyy?igsh=MXYyMWk0ajQwYzFycw=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Reservily</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>