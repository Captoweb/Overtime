<?php require ("../auth.php"); ?>
       
<?php require_once('../admin_header.php'); ?>
<link href="../admin_style.css" rel="stylesheet"> 
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
    <div class="container-fluid"> 
           <div class="row">
               
<?php require_once('../admin_sidebar.php'); ?>  

 

<?php
 require_once('../connect.php');

$sql = "SELECT * FROM printer_repair"; 
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
           
    
       
<main class="col-md-10 content">
   
   <h2 class="pb-2">Ремонт принтеров </h2>  
    
     <a href="create.php"  class="btn btn-success"><ion-icon  name="add-circle"></ion-icon> Добавить принтер</a>
<h4>Добавление, редактирование и удаление</h4>
     
 <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Модель принтера</th>
      <th scope="col">ХЗ</th>
      <th scope="col">Цена</th>
      <th scope="col">Действия</th>
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
        <a href="edit.php?id=<?=$printer['id']; ?>" class="btn btn-warning"><ion-icon name="create"></ion-icon> Edit</a>
        
        <a onclick="return confirm('Вы уверенны?')" href="delete.php?id=<?=$printer['id']; ?>" class="btn btn-danger"><ion-icon name="trash"></ion-icon> Delete</a>
      </td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
       
        </main>
    </div>        
</div>


  <?php require_once('../admin_footer.php'); ?>