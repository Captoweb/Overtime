<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="admin_style.css" rel="stylesheet">

    <title>test</title>
  </head>
  <body>
   <!--начало верстки-->
   <header>
      <nav class="nav navbar-dark">
      <a class="nav-link active" href="index.php">ADMIN</a>
      <a class="nav-link" href="/">Сайт</a>
      <a class="nav-link" href="admin.php?do=logout">Выход</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
     </nav>	
   </header>
 
      <div class="line">
      
       </div>


 <div class="container-fluid ">
      <div class="row">
	  
        <header class="col-md-2 sidebar">
          <nav class="sidebar-sticky  navbar-dark navbar-expand-md ">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto flex-column">
                <li class="nav-item active">
                  <a href="../admin_refilling/admin_refilling.php" class="nav-link"><ion-icon name="grid"></ion-icon>  Заправка картриджей</a>
                </li>
                <li class="nav-item active">
                  <a href="../printer_repair/printer_repair.php" class="nav-link">Ремонт принтеров </a>
                </li>
                <li class="nav-item active">
                  <a href="../cartridge_repair/cartridge_repair.php" class="nav-link">Ремонт картриджей</a>
                </li>
                <li class="nav-item  active">
                  <a href="../cartridges_sale/cartridges_sale.php" class="nav-link">Продажа картриджей</a>
                </li>
                <li class="nav-item active">
                  <a href="../admin_refilling/aboutus.php" class="nav-link">О компании </a>
                </li>
                <li class="nav-item active">
                  <a href="" class="nav-link">Контакты</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="bottom">
          <p>до низа довести и покрасить этот див, а на телефоне чтобы прятался</p>
          </div>
        </header>
        <!-- end header -->

       
        <main class="col-md-10 content">
          <h1>Левый блок сворачивается на телефоне!</h1>
          <p>Это вам не шутки</p>
          <p>иконки слишком медленные, надо подключить фонтавесом</p>
          <p>минусовые маржины можно убрать</p>
        </main>
        <!-- end main -->
      </div>
    </div>
    
    <?php require_once('admin_footer.php'); ?>