<?php require ("../auth.php"); ?>
       
<?php require_once('../admin_header.php'); ?>
<link href="../admin_style.css" rel="stylesheet"> 
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
      
    <div class="container-fluid"> 
           <div class="row">
               
<?php require_once('../admin_sidebar.php'); ?>  

 
<?php
 require_once('../connect.php');

$sql = "SELECT * FROM refilling_cartridges5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
           
    
<main class="col-md-10 content">    

   <h2 class="pb-2">Заправка картриджей Xerox</h2>  
    
    <h5>Добавление, редактирование и удаление</h5>
     <a href="create.php"  class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; 
 Добавить картридж</a>

    
<div class="table-responsive-sm"><!-- адаптивная таблица -->      
 <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col" class="hidden">id</th>
      <th scope="col">Модель принтера</th>
      <th scope="col">Картридж</th>
      <th scope="col">Цена услуги</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($printers as $printer):?>
    <tr>
      <th scope="row" class="hidden"><?= $printer['id']; ?></th>
      <td><?= $printer['printer']; ?></td>
      <td><?= $printer['cartridge']; ?></td>
      <td><?= $printer['price']; ?></td>
      <td>
        <a href="edit.php?id=<?=$printer['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
 </a>
        
        <a onclick="return confirm('Вы уверенны?')" href="delete.php?id=<?=$printer['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
 </a>
      </td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
    </div>   
    
    </main>
        </div>
    </div>



  <?php require_once('../admin_footer.php'); ?>