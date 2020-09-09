<?php $url = $this->helpers['URLHelper']->getURL(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/site/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
</head>
<body class="text-center">
    <nav>
    <div class="logo">Logo</div>
    <div class="menu">Menu</div>
    <a href="<?php echo $url ?>/usuarios/contato" class="menu-link">Contato</a>
    <a href="<?php echo $url ?>/usuarios/servicos" class="menu-link">Serviços</a>
    <a href="#qmsomos" class="menu-link">Quem somos</a>
    <a href="<?php echo $url ?>" class="menu-link">Home</a>
  </nav>

  <main>
    
    <section class="banner">
      <h2 class="text-primary">Animes Shopping</h2>
      <p>Compre seus animes , mangas e produtos oficiais de animes!</p>
    </section>

    <section class="servicos">
      <div class="container">
      <h2>Serviços</h2>

      <div class="column column-3">
        
        <div class="imagem" id="imagem1"></div>
        <p>Animes</p>

      </div>

      <div class="column column-3">
        
        <div class="imagem" id="imagem2"></div>
        <p>Mangas</p>

      </div>

      <div class="column column-3">
        
        <div class="imagem" id="imagem3"></div>
        <p>Filmes</p>

      </div>


      </div>

    </section>

    <section class="quem-somos">
      
      <div class="container">
        
        <h2 id="qmsomos">Quem somos</h2>
        <p>
          nós somos uma empresa focada em serviços de streaming e vendas de animes e produtos relacionados,
          Empresa criada em 2017 com parcerias oficiais de produtos e animes japoneses, ajude seus animes favoritos.
        </p>

      </div>

    </section>

  </main>

  <footer>
    
    <div class="container">
      
      Animes Shopping - Todos os Direitos Reservados

    </div>

  </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo $url ?>/assets/libs/jQuery/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="<?php echo $url ?>/assets/js/usuarios/usuarios.js"></script>

<!--     <script src="../../../../assets/js/vendor/holder.min.js"></script> -->
<!--     <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script> -->
  </body>
</html>
