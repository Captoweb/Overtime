<?php
require_once('../connect.php');

$sql = ("SELECT * FROM cartridges_sale WHERE id=:id");

$stmt = $pdo->prepare($sql); // подготовить
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute(); // выполнить  

$printers = $stmt->fetch(PDO::FETCH_ASSOC);
                   
?>
   
<?php require_once('../admin_header.php'); ?>
     
<link href="../admin_style.css" rel="stylesheet"> 
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">      
      
       <div class="container-fluid"> 
           <div class="row">
               
               
<?php require_once('../admin_sidebar.php'); ?>
 
 
 
<main class="col-md-10 content">
   
   <h2>Изменить запись</h2>  
 <form action="update.php?id=<?= $printers['id'];?>" method="post">
     <div class="form-group">
         <input type="text" name="printer" class="form-control" value = "<?= $printers['printer'];?>">
     </div>
     
     <div class="form-group">
         <input type="text" class="form-control" name="model" value = "<?= $printers['model'];?>">
     </div>
     
     <div class="form-group">
         <input type="text" class="form-control" name="price" value="<?= $printers['price'];?>">
     </div>
     
     <div class="form-group">
         <button class="btn btn-success" type="submit"><ion-icon  name="add-circle"></ion-icon> Изменить</button>
     </div>
 </form>   

        </main>
    </div>
</div>


  <?php require_once('../admin_footer.php'); ?>