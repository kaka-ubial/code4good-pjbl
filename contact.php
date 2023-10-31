<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>code4good</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/design.css">


      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="white_bg">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.php"><img id = 'logui'src="images/logo1.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">Sobre</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="projects.php">Projetos</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contate-nos</a>
                                 </li>
                                 <li class="nav-item d_none le_co">
                                    <a class="nav-link" href="login.php"><i  class="fa fa-user" aria-hidden="true"></i> Login</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="sign.php">Cadastro</a>
                                 </li>
                                 <li class="nav-item d_none le_co">
                                    <a class="nav-link" href="#"><i  class="fa fa-search" aria-hidden="true"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
               <!-- end header inner -->
               <!-- end header -->
               <!-- banner -->
               <section class="banner_main">
                  <div id="banner1" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#banner1" data-slide-to="0" class="active"></li>
                        <li data-target="#banner1" data-slide-to="1"></li>
                        <li data-target="#banner1" data-slide-to="2"></li>
                     </ol>
                  </div>
               </section>
            </div>
         </div>
      </header>
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <span class="yellow">Contate-nos</span><br>Tem alguma dúvida?</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="contac_form" class="contac_form" action='https://formsubmit.co/kakaubial@gmail.com' method='post'>
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contac_control" placeholder="Nome" type="text" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contac_control" placeholder="Telefone" type="text" name="phone">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contac_control" placeholder="Endereço de Email" type="text" name="email">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contac_control" placeholder="Assunto" type="text" name="subject">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensagem" type="text" Message="Name" name="subject"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <footer >
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a class="logo2" href="index.php"><img src="images/logo3.png" alt="#"/></a>
                     <div class="follow">
                        <p>Obrigada pela visita! <br>
                           Não deixe de recomendar essa iniciativa para seus amigos!</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Link Rápido!</h3>
                     <ul class="link_icon">
                        <li> <a href="index.php"> <i class="fa fa-chevron-right" aria-hidden="index.php"></i>Home</a></li>
                        <li> <a href="about.php"> <i class="fa fa-chevron-right" aria-hidden="blog"></i>Sobre </a></li>
                        <li> <a href="projects.php"> <i class="fa fa-chevron-right" aria-hidden="contact"></i>Projetos</a></li>
                        <li> <a href="login.php"> <i class="fa fa-chevron-right" aria-hidden="blog"></i>Login</a></li>
                        <li> <a href="sign.php"> <i class="fa fa-chevron-right" aria-hidden="contact"></i>Cadastro</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Conheça-nos!</h3>
                     <div class="follow">
                        <p>Dê uma olhadinha nas redes sociais</p>
                        <ul class="social_icon">
                           <li> <a href="https://pt-br.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="https://www.linkedin.com/" target="_blank">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <h3>Contato</h3>
                     <ul class="location_icon">
                        <li><a href="https://maps.app.goo.gl/cf6aR9XyDUf6Y4XQA" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>PUCPR, Curitiba - PR<br>
                        </li>
                        <li><a href="https://mail.google.com/" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>code4good@gmail.com</li>
                        <li><a href="#" target="_blank"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+49 99941-6461</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>Copyright 2019 All Right Reserved By<a href="https://html.design/"> Free  HTML Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>