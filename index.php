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
<html lang="ar" >

<head>
    <meta charset="utf-8">
    <title>Reservily - Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Free HTML Templates" name="keywords"> -->
    <!-- <meta content="Free HTML Templates" name="description"> -->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Icon dyal  Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- talwind css -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
                .speciality-bg {
            background-image: url('https://example.com/path/to/your/speciality-image.jpg'); /* Update with your image URL */
            background-size: 24px 24px; /* Adjust the size as needed */
            background-repeat: no-repeat;
            background-position: right center;
            padding-right: 30px; /* Add some padding to the right to avoid text overlaying the image */
        }
        .hidden {
            display: none;
        }
        .tab-button {
            transition: border-color 0.3s, color 0.3s;
        }
        .tab-button.active {
            color: #1D4ED8; /* text-blue-500 */
            border-bottom: 2px solid #1D4ED8; /* border-blue-500 */
        }
    </style>
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
                        <a href="index.php" class="nav-item nav-link active">Accueil</a>
                        <a href="about.php" class="nav-item nav-link">À propos de nous</a>
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
                        <a href="profile.php" class="nav-item nav-link"><span class="material-symbols-outlined profile">
                            account_circle
                            </span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <!-- <div  class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-lg-start">
                    <h5 class="d-inline-block text-secondary text-uppercase  border-bottom border-5"
                        style="border-color: rgba(256, 256, 256, .3) !important;">Bienvenue chez DIAMedicau</h5>
                    <h1 class="display-1 text-white mb-md-4 d-flex">Bienvenue sur votre plateforme digitale DIAMedicau </h1>
                    <div class="pt-2 d-flex">
                        <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Prendre rendez-vous</a>
                        <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Plus</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- hhh -->
        <div class="container mx-auto py-4 text-center">
            <h1 id="main-title" class="h1 mb-4 text-white">Prenez rapidement un rendez-vous avec votre médecin !</h1>
            <p id="main-description" class="lead mb-4 text-white ">Sélectionnez votre médecin, choisissez la date et l'heure de votre rdv et recevez votre sms/mail de confirmation. C’est aussi simple que ça !</p>
        
            <div class="bg-white p-4 rounded shadow-lg mx-auto" style="max-width: 768px;">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                    <p class="curs tab-button w-50 active" data-target="medecin-content">Médecin</p>
                    <p class="curs tab-button w-50" data-target="pharmacie-content">Pharmacie</p>
                    <p class="curs tab-button w-50" data-target="medicament-content">Médicament</p>
                </div>
        
                <div id="medecin-content" class="tab-content">
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nom du professionnel de santé">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Spécialité">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select">
                                    <option>Maroc</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ville">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary ">
                                <svg class="bi bi-arrow-right" width="1em" height="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.293 1.707a1 1 0 010 1.414L4.414 9H14a1 1 0 110 2H4.414l5.879 5.879a1 1 0 11-1.414 1.414l-7.5-7.5a1 1 0 010-1.414l7.5-7.5a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
        
                <div id="pharmacie-content" class="tab-content d-none">
                    <!-- <h1 class="h1 mb-4 text-white">Trouvez rapidement la pharmacie la plus proche de chez vous !</h1>
                    <p class="lead mb-4 text-white">Optimisez votre temps et trouvez facilement la pharmacie ouverte la plus proche de chez vous !</p> -->
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nom de la pharmacie">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select">
                                    <option>Maroc</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ville">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">
                                <svg class="bi bi-arrow-right" width="1em" height="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.293 1.707a1 1 0 010 1.414L4.414 9H14a1 1 0 110 2H4.414l5.879 5.879a1 1 0 11-1.414 1.414l-7.5-7.5a1 1 0 010-1.414l7.5-7.5a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
        
                <div id="medicament-content" class="tab-content d-none">
                    <!-- <h1 class="h1 mb-4 text-white">Vous cherchez des informations sur un médicament ?</h1>
                    <p class="lead mb-4 text-white">Retrouvez toutes les informations de votre médicament en seulement quelques clics !</p> -->
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nom du médicament / Laboratoire / Classe thérapeutique">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select">
                                    <option>Maroc</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ville">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">
                                <svg class="bi bi-arrow-right" width="1em" height="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.293 1.707a1 1 0 010 1.414L4.414 9H14a1 1 0 110 2H4.414l5.879 5.879a1 1 0 11-1.414 1.414l-7.5-7.5a1 1 0 010-1.414l7.5-7.5a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script>
            document.querySelectorAll('.tab-button').forEach(button => {
                button.addEventListener('click', () => {
                    document.querySelectorAll('.tab-button').forEach(btn => {
                        btn.classList.remove('active', 'btn-primary');
                        btn.classList.add('btn-');
                    });
                    button.classList.add('active', 'btn-white');
                    button.classList.remove('btn-secondary');
        
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.add('d-none');
                    });
                    document.getElementById(button.getAttribute('data-target')).classList.remove('d-none');
        
                    if (button.getAttribute('data-target') === 'pharmacie-content') {
                        document.getElementById('main-title').textContent = 'Trouvez rapidement la pharmacie la plus proche de chez vous !';
                        document.getElementById('main-description').textContent = 'Optimisez votre temps et trouvez facilement la pharmacie ouverte la plus proche de chez vous !';
                    } else if (button.getAttribute('data-target') === 'medicament-content') {
                        document.getElementById('main-title').textContent = 'Vous cherchez des informations sur un médicament ?';
                        document.getElementById('main-description').textContent = 'Retrouvez toutes les informations de votre médicament en seulement quelques clics !';
                    } else {
                        document.getElementById('main-title').textContent = 'Prenez rapidement un rendez-vous avec votre médecin !';
                        document.getElementById('main-description').textContent = 'Sélectionnez votre médecin, choisissez la date et l\'heure de votre rdv et recevez votre sms/mail de confirmation. C’est aussi simple que ça !';
                    }
                });
            });
        </script>
        
    </div>
    
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-99 rounded" src="img/Medical-Animation-Explainer-Videos-scaled.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Reservily</h5>
                        <h1 class="display-5 ">Reservily</h1>
                        <p>Bienvenue sur notre plateforme de santé en ligne ! Notre objectif est de connecter les patients avec les cliniques et de fournir une gamme de services pour répondre à tous vos besoins médicaux. Que vous recherchiez des rendez-vous en ligne, la vente de produits parapharmaceutiques ou des analyses médicales, nous sommes là pour vous aider.

                            Grâce à notre plateforme conviviale, vous pouvez prendre rendez-vous avec votre médecin préféré en quelques clics seulement. Fini les longues attentes au téléphone ou les déplacements inutiles, vous pouvez désormais réserver votre consultation en ligne à tout moment, où que vous soyez.
                            
                            En plus des rendez-vous en ligne, nous proposons également la vente de produits parapharmaceutiques. Vous pouvez commander vos produits préférés en ligne et les recevoir directement chez vous. Notre sélection de produits de qualité comprend des articles de soin de la peau, des compléments alimentaires, des produits pour bébés, et bien plus encore.
                            
                            Nous comprenons que les analyses médicales peuvent parfois être un processus laborieux. C'est pourquoi nous facilitons l'accès à ces services essentiels. Vous pouvez prendre rendez-vous pour vos analyses médicales en ligne, et nos laboratoires partenaires vous garantissent des résultats précis et rapides.
                            
                            Chez nous, votre santé est notre priorité. Nous nous engageons à vous offrir des services de qualité, sûrs et sécurisés. Toutes les cliniques et les laboratoires partenaires sont soigneusement sélectionnés pour assurer des normes élevées de professionnalisme et de qualité des soins.
                            
                            Naviguez sur notre site pour découvrir nos services, parcourir les cliniques disponibles, et prendre rendez-vous en ligne. Nous sommes là pour vous accompagner tout au long de votre parcours de santé. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations. Votre bien-être est notre priorité absolue.
                            
                            Bienvenue sur notre plateforme de santé en ligne - votre passerelle vers des soins de qualité, accessibles et pratiques.</p>
                    </div>
                    <p></p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-4 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualifiée<small class="d-block text-primary">Médecins</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Urgence<small class="d-block text-primary">Prestations<br>de service</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Précise<small class="d-block text-primary">Essai</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">Rendez-vous en ligne</h4>
                        <p class="m-0">En connectant les patients avec les cliniques, notre plateforme permet aux utilisateurs de prendre rendez-vous en ligne avec des médecins et des spécialistes. Cela élimine le besoin de déplacements inutiles et permet aux patients de planifier leurs consultations de manière pratique, à tout moment et depuis n'importe où.
                        </p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">Vente de produits parapharmaceutiques</h4>
                        <p class="m-0">En plus des rendez-vous en ligne, nous proposons la vente de produits parapharmaceutiques. Les patients peuvent parcourir une large gamme de produits de soins de la peau, de compléments alimentaires, de produits pour bébés, etc. Ils peuvent facilement passer commande en ligne et se faire livrer les produits directement à leur domicile.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Analyses médicales</h4>
                        <p class="m-0">Nous comprenons que les analyses médicales peuvent être fastidieuses. Pour faciliter les choses, nous facilitons la prise de rendez-vous en ligne pour les analyses médicales. Les patients peuvent prendre rendez-vous pour différents tests et examens, et nos laboratoires partenaires garantissent des résultats précis et rapides.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Rendez-vous</h5>
                        <h1 class="display-4">Prenez rendez-vous pour votre famille</h1>
                    </div>
                    <p class="text-white mb-5">Dans l'ensemble, notre site web est une plateforme tout-en-un qui relie les patients aux cliniques, leur offrant un accès pratique à divers services de santé. Nous accordons la priorité à la qualité, à la sécurité et à l'accessibilité des soins de santé, en veillant à ce que les patients reçoivent les meilleurs soins possibles de la part de professionnels de confiance.</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Trouver un médecin</a>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
                <h1 class="display-4">Awesome Medical Programs</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/Medical-Animation-Explainer-Videos-scaled.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Rendez-vous en ligne</h3>
                            
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Rendez-vous médicaux en ligne</p>
                        <p>Éliminez déplacements inutiles</p>
                        <p>Consultations pratiques et flexibles</p>
                        <p>Accessible à tout moment</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/Healthcare-Business-670x442.png" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Vente de produits parapharmaceutiques</h3>
                            
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Vente en ligne diversifiée</p>
                        <p>Produits parapharmaceutiques accessibles</p>
                        <p>Commandes faciles et rapides</p>
                        <p>Livraison à domicile</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/medical-animation.jpg" style="height: 250px;">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Analyses médicales</h3>
                            
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Rendez-vous en ligne</p>
                        <p>Analyses médicales variées</p>
                        <p>Résultats précis et rapides</p>
                        <p>Laboratoires partenaires fiables</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/medical-animation-videos-768x512.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Autres services</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Télé-médecine disponible.</p>
                        <p>Conseils santé accessibles.</p>
                        <p>Renouvellement ordonnances en ligne.</p>
                        <p>Gestion dossiers médicaux électroniques</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    

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