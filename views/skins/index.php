<?php
include ROOT . '/views/layouts/head.php';
?>
<body>
    <!-- Start your project here-->
<!-- Navbar --> 
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #22242b;">
  <div class="container">
    <a class="navbar-brand" target="_blank" href="https://vk.com/brainburg_arizona">ArzBrainburg</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profile">Профиль</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Разделы
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item active" href="#">Скины</a></li>
            <li><a class="dropdown-item" href="/cars">Машины</a></li>
            <li><a class="dropdown-item" href="/house">Метка дома</a></li>
            <li><hr class="dropdown-divider bg-light"></li>
            <li><a class="dropdown-item" href="/cart">Корзина</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="history/order"> История покупок</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">Админ-панель</a>
        </li>
      </ul>
</div>
<div class="d-flex">
<a href='/balance' class="text-light btn badge rounded-pill bg-primary btn-sm btn-balance">Баланс: 
  <?php echo(number_format($balance['balance'],0,',','.').'$');?></a> 
</div>
    </div>
</nav>

<main>
    <section class=" d-flex align-items-center justify-content-center" id='hero'>
        <div class=" container text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5 col-lg-8 text-light">
                    <h2>Магазин скинов</h2>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <?php foreach($skins as $skin){
                    echo("
                    <div class=' col col-md-3 col-sm-6 mt-5' >
                    <div class='card text-light'>
                            <img class = 'skin' src='/img/skin$skin[id].png' alt=''>
                            <div class='card-body'>
                            <h5 class='card-title'>Скин #$skin[id]</h5>
                            <p class='card-text'>Цена: ".
                            number_format(0+str_replace(".","",$skin['price']),0,',','.').'$'."</p>
                            <form method='POST' action='/cart/add/$skin[id]'>
                              <button value='Покупка скина' name='skin' class='btn btn-primary'>В корзину</button>
                            </form>
                            </div>                
                    </div>
                </div>
                ");}
                ?>
            </div>
        </div>
        <div class=" mt-2"></div>
    </section>
</main>


</html>