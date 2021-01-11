
<?php 

  require_once('config/conn/conn.php');
  require_once('config/trabalhos.php');

  $t = new Trabalhos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Igor Nóbrega</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="img/avataaars.png" />

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Igor Nóbrega</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#servicos">Serviços</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfólio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Sobre mim</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-light text-dark text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Igor Nóbrega</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Desenvolvedor de sites, sistemas e aplicativos</p>

    </div>
  </header>

  <!-- serviços -->
  <section class="page-section bg-secondary text-white mb-0" id="servicos">
    <div class="container">

      <!-- Cabeçalho de Serviços -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Serviços</h2>

      <!-- Estrela -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Descrição de serviços -->
      <div class="row">
        <div class="mx-auto">
          <p class="lead">Desenvolvedor de sites, aplicações web, aplicativos android, sistemas para empresas.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfólio</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

      <!-- Portfolio Item -->
      <?php $t->buscarTodosMini(); ?>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-dark text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Mim</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Estudante de Análise e Desenvolvimento de Sistemas, desenvolvedor na KMM Engenharia de Software, apaixonado por café, pizza, tecnologia, games e programação.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Principais skills: Desenvolvimento de aplicações web com PHP, JavaScript, MySQL, HTML + CSS + BOOTSTRAP, aplicativos android e aplicações Desktop com Java.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Entre em contato</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <form name="sentMessage" id="sentMessage" method="post" action="" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Nome" required/>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>E-mail</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" required/>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Telefone</label>
                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Telefone" required/>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensagem</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="sendMessageButton" class="btn btn-primary btn-xl" id="sendMessageButton" value="Enviar"/>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0">Uvaranas
            <br>Ponta Grossa, Paraná</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Me siga nas redes sociais</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/igorrsnobrega/">
            <i class="fab fa-fw fa-github"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="http://instagram.com/igornobrega94">
            <i class="fab fa-fw fa-instagram"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Sobre mim</h4>
            <p>Apaixonado por tecnologia, games, programação e desenvolvimento, em busca do código perfeito...</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small><a href="https://igornobrega.com">Igor Nóbrega &copy;</a></small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <?php $t->buscaTodosModal(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

  <!--envio de email com ajax -->
  <script>
    
    $('#sendMessageButton').click(function(){
      $('#sentMessage').submit(function(){        

      $('#sendMessageButton').val('carregando...');
      $("#sendMessageButton").attr("disabled", true);     
        $.ajax({
        url: 'config/contato.php',
        type: 'POST',
        data: $('#sentMessage').serialize(),
        success: function(data){            
        alert(data);
        window.location.href='./'
        }
        });
        return false;
      });
    });
  </script>

</body>

</html>
