<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arrow ECS</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/arrow.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
  
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>ARROW ECS</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Accueil</a></li>
          <li><a class="nav-link scrollto" href="solutions.html">Solutions</a></li>
          <li><a class="nav-link scrolltoe" href="services.html">Services</a></li>
          <li><a class="nav-link scrollto" href="fournisseurs.html">Fournisseurs</a></li>
          <li><a class="nav-link scrollto" href="plus.html">Plus</a></li>
          <li class="dropdown"><a class="nav-link scrollto active" href="equipe.php"><span>Nous contacter</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="nfournisseurs.php">Nouveau fournisseur</a></li>
              <li><a href="partenaire.php">Devenir partenaire</a></li>
            </ul>
          </li>
          <li>
              <a href="../ARROW-Client/login.php" target="_black"
                ><button type="button" class="btn btn-dark">
                  Arrow Clients
                </button></a
              >
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Accueil</a></li>
          <li>Nouveau fournisseur</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

   
     <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      
   <?php


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "arrow_client";


        //connexion au serveur
        $con = mysqli_connect($servername, $username, $password, $dbname);


        if (isset($_POST['Ajouter'])) {



            $prenom = $_POST['prenom'];
            @$prenom = str_replace("'", "\'", $prenom);
            @$nom = $_POST['nom'];
            @$nom = str_replace("'", "\'", $nom);
            @$profession = $_POST['profession'];
            @$profession = str_replace("'", "\'", $profession);
            @$entreprise = $_POST['entreprise'];
            @$entreprise = str_replace("'", "\'", $entreprise);
            @$email = $_POST['email'];
            @$email = str_replace("'", "\'", $email);
            @$tel = $_POST['tel'];
            @$tel = str_replace("'", "\'", $tel);
            @$domaine = $_POST['domaine'];
            @$domaine = str_replace("'", "\'", $domaine);
             @$produit = $_POST['produit'];
            @$produit = str_replace("'", "\'", $produit);
            @$description = $_POST['description'];
            @$description = str_replace("'", "\'", $description);




            $sql = "INSERT INTO contacts (prenom,nom,profession,entreprise,email,tel,domaine,produit,description,type) VALUES  ('$prenom' , '$nom','$profession' , '$entreprise', '$email','$tel', '$domaine','$produit','$description','Fournisseur')    ";
            $result = $con->query($sql);

            echo  '


              <script src="plugins/jquery/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                     <script type="text/javascript">   
              
                              $(document).ready(function(){
              
                               
                                
                                swal({
                                    icon: "success",
                                    title: "Bien .",
                                    text: "Envoyé ",
                                })
                              });
                            </script>
              ';
            echo ("<meta http-equiv='refresh' content='2'>");
        }


        ?>
        

    <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Nouveau fournisseur</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Prenom</label>
                                <div class="col-md-6">
                                    <input type="text" id="prenom" class="form-control" name="prenom" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" id="nom" class="form-control" name="nom" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Profession</label>
                                <div class="col-md-6">
                                    <input type="text" id="profession" class="form-control" name="profession" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Entreprise</label>
                                <div class="col-md-6">
                                    <input type="text" id="entreprise" class="form-control" name="entreprise" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Adresse mail</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Telephone</label>
                                <div class="col-md-6">
                                    <input type="tel" id="tel" class="form-control" name="tel" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Merci de nous indiquer votre domaine d’expertise : </label>
                                <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="domaine" type="domaine">
                                    <option selected>Veuillez sélectionner</option>
                                    <option value="Cloud">Cloud</option>
                                    <option value="Data Center">Data Center</option>
                                    <option value="Security & Networking">Security & Networking</option>
                                    <option value="Big Data & Analytics">Big Data & Analytics</option>
                                    <option value="IOT">IOT</option>
                                    <option value="GDPR">GDPR</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Quels produits et/ou services fournissez-vous ? </label>
                                <div class="col-md-6">
                                    <textarea type="text" id="produit" class="form-control" name="produit" required autofocus></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Merci de nous fournir une description de vos produits et/ou services : </label>
                                <div class="col-md-6">
                                    <textarea type="text" id="description" class="form-control" name="description" required autofocus></textarea>
                                </div>
                            </div>

                            

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float: right;" name="Ajouter" id="Ajouter">
                                    Envoyer
                                </button>
                                
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

         

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/arrowecs.png" alt="">
            </a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13301.64820224308!2d-7.640212999999999!3d33.542669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d3c77d56d57%3A0x39c864bef89a71f5!2sTechnopark%2C%20Casablanca%2C%20Morocco!5e0!3m2!1sen!2suk!4v1620593572670!5m2!1sen!2suk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

         <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Technopark Bureau 502,<br>
              Casablanca - Maroc<br><br>
              <strong>Téléphone:</strong> +212 (0) 5 22 52 92 60<br>
              <strong>Email:</strong> contact@arrowecs.ma<br>
            </p>

          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>nous suivre</h4>
            <div class="social-links mt-3">
              <a href="https://twitter.com/arrowglobal" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/arrowfiveyearsout" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/arrowelectronics/" class="instagram" target="_blank"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/arrow-electronics" class="linkedin" target="_blank"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
              <a href="https://www.youtube.com/channel/UCtJWSJHzxflA84MTawxZ1hA" class="youtube" target="_blank"><i class="bi bi-youtube bx bxl-youtube"></i></a>
            </div>
          </div>
          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>Arrow Electronics, Inc. Tous droits réservés.
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  


<!------ Include the above in your HEAD tag ---------->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="assets/js/main.js"></script>

  <script type="text/javascript">
    var divs = ["Section1", "Section2", "Section3","Section4","Section5"];
    var visibleId = null;
    function show(id) {
      if(visibleId !== id) {
        visibleId = id;
      } 
      hide();
    }
    function hide() {
      var div, i, id;
      for(i = 0; i < divs.length; i++) {
        id = divs[i];
        div = document.getElementById(id);
        if(visibleId === id) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }  
 </script>
</body>

</html>