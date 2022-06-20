<?php
require_once ROOT . '/views\layouts\head.php';

?>
<body>
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
          <a class="nav-link active " aria-current="page" href="/">Профиль</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Разделы
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="/skins">Скины</a></li>
            <li><a class="dropdown-item" href="/cars">Машины</a></li>
            <li><a class="dropdown-item" href="/house">Метка дома</a></li>
            <li><hr class="dropdown-divider bg-light"></li>
            <li><a class="dropdown-item active disabled" href="/cart">Корзина</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/profile"> История покупок</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">Админ-панель</a>
        </li>
      </ul>
</div>
<div class="d-flex">
  <a href='/balance' class="text-light btn badge rounded-pill bg-primary btn-sm btn-balance">Баланс: <?php
     // $n = (0+str_replace(".","",$n));
      echo(number_format($balance['balance'],0,',','.').'$');?></a> 
</div>
    </div>
</nav>
<div class=" d-flex justify-content-center h-100 justify-content-center ">
                <div class="col-md-4 col-lg-4 text-light cart ">
                
                    <div class="card ">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <?php echo("<img src='/img/skin$product[id_product].png' class='img-fluid' style = 'margin-left: 15%; margin-top: 15%;' alt=''>
                            </div>
                            <div class='col-md-7 '>
                            <div class='card-header bg-transparent border-success fw-bold h5'>Подтверждение покупки</div>
                                <div class='card-body '>
                                    <p class='card-text mt-0 mb-0'>Скин #$product[id_product]</p>
                                    <p class='card-text mt-1 mb-0'>Цена: " . number_format($product['price'],0,',','.') ."$</p>
                                    <p class='card-text mt-1 mb-0'>Скидка: $product[sale]%</p>
                                    <p class='card-text mt-1 mb-0'>Остаток: " . number_format($balance['balance'] - $product['price'],0,',','.') ."$</p>
                                    <form method='POST' action='/cart/buy/$product[id_product]'>
                                      <input class='mb-1 mt-1 bg-dark text-light form-control form-control-sm' style='max-width: 200px; margin-top: 4px !important;' type='text' name='nick' value='Nick_Name' placeholder='Nick_Name'>
                                        <select name='server'style='max-width: 200px; margin-top: 6px;' class='bg-dark text-light form-select form-select-sm'>
                                        <option value='5'>Brainburg</option>
                                        </select>
                                      <button type='submit' class=' mt-2 btn btn-sm btn-primary'>Купить</button>
                                    </form>
                                    <p class='card-text text-muted align-bottom mt-2' style = 'font-size: 12px; line-height: 12px;'>Нажимая кнопку Купить вы подтверждаете списание средств за покупку. <br> Правильность заполнения данных лежит на покупателе. </p>
                                    </div>
                                </div>
                            
                        </div>
                        
                    </div>
                    
                </div>") ?>
                </div>
</body>
</html>