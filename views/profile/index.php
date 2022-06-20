<?php
$status_array = array(
    'Платеж зачислен' => 'text-success',
    'Платеж не найден' => 'text-danger',
    'В обработке' => 'text-warning',
    "#request"   => 'text-primary',);
    include ROOT . '/views/layouts/head.php';?>

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
          <a class="nav-link active disabled" aria-current="page" href="#">Профиль</a>
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
            <li><a class="dropdown-item" href="/cart">Корзина</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile"> История покупок</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">Админ-панель</a>
        </li>
      </ul>
</div>
<div class="d-flex">
<a href='/balance' class="text-light btn badge rounded-pill bg-primary btn-sm btn-balance">Баланс: <?php
      echo(number_format($balance['balance'],0,',','.').'$');?></a> 
</div>
    </div>
</nav>
<section class=" d-flex align-items-center justify-content-center" id='hero'>
        <div class=" container text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-1 mb-3 col-lg-8 text-light">
                    <h2>История операций</h2>
                </div>
            </div>
        </div>
</section>
<table class="table table-bordered table-responsive table-striped text-center table-dark">
      <tbody >
    <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Ник</th>
      <th scope="col">Покупатель</th>
      <th scope="col">Дата</th>
      <th scope="col">Операция</th>
      <th scope="col">Сумма</th>
      <th scope="col">Статус</th>
      <th scope="col">Инфо</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  foreach ($orderHistoryList as $orderHistoryItem){
  $expl = preg_split('/\s[0-9]+/',$orderHistoryItem['info']);
    if(isset($expl[0])){
      $info = $status_array[($expl[0])];}
    else{
      $info = $status_array[$status]; 
        };
        if (strval(date('Y-m-d')) == $orderHistoryItem['date']){
          echo("<tr>
          <th scope='row'>$orderHistoryItem[id] <span class='badge bg-danger'>New</span> </th>
          <td>$orderHistoryItem[nick]</td>
          <td><a class='text-light text-decoration-none' href='http://vk.com/id$orderHistoryItem[idvk]'>$orderHistoryItem[idvk]</a></td>
          <td>$orderHistoryItem[date]</td>
          <td>$orderHistoryItem[operation]</td>
          <td>".(number_format(0+str_replace('.','',$orderHistoryItem['sum']),0,',','.').'$') ."</td>
          <td>$orderHistoryItem[status]</td>
          <td class='$info'>$orderHistoryItem[info]</td>
        </tr>");
        }
        else{
  echo("<tr>
    <th scope='row'>$orderHistoryItem[id]</th>
    <td>$orderHistoryItem[nick]</td>
    <td><a class='text-light text-decoration-none' href='http://vk.com/id$orderHistoryItem[idvk]'>$orderHistoryItem[idvk]</a></td>
    <td>$orderHistoryItem[date]</td>
    <td>$orderHistoryItem[operation]</td>
    <td>".(number_format(0+str_replace('.','',$orderHistoryItem['sum']),0,',','.').'$') ."</td>
    <td>$orderHistoryItem[status]</td>
    <td>$orderHistoryItem[info]</td>
  </tr>");
        }
  };
  ?>
  </tbody>
</table>
</body>

</html>