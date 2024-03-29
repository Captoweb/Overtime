<?php require ("../auth.php"); ?>
       
<?php require_once('../admin_header.php'); ?>
<link href="../admin_style.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">    
   
    <div class="container-fluid"> 
           <div class="row">
               
<?php require_once('../admin_sidebar.php'); ?>  

 
<?php
 require_once('../connect.php');

$sql = "SELECT * FROM cartridges_sale"; 
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
           

       
<main class="col-md-10 content">
   
   <h2 class="pb-2">Продажа картриджей</h2>  
    
    <h5>Добавление, редактирование и удаление</h5>
     <a href="create.php"  class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Добавить картридж</a>

 <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Модель картриджа</th>
      <th scope="col">ХЗ</th>
      <th scope="col">Цена</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($printers as $printer):?>
    <tr>
      <th scope="row"><?= $printer['id']; ?></th>
      <td><?= $printer['printer']; ?></td>
      <td><?= $printer['model']; ?></td>
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
       
       
         </main> 
    </div>
</div>


  <?php require_once('../admin_footer.php'); ?>