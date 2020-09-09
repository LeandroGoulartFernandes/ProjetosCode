<?php $url = $this->helpers['URLHelper']->getURL(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/site/home.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/css.css">
  <title></title>
</head>
<body ng-app="">
  <div class="navbar">
    <a href="#banner">Banner</a>
    <a href="#servicos">Serviços</a>
    <a href="#qmsomos">Quem Somos</a>
    <a href="#direitos">Direitos</a>
    <a href="/">Index</a>
  </div>
   <div ng-include="'sectionbanner.html'"></div>
   <div ng-include="'SectionMain.html'"></div>
   <div ng-include="'SectionQuemSomos.html'"></div>
   <div ng-include="'SectionFooter.html'"></div>


    <script type="text/javascript" src="<?php echo $url ?>/assets/libs/jQuery/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="<?php echo $url ?>/assets/js/usuarios/usuarios.js"></script>
</body>
</html>
