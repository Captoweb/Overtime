<?php require ("../auth.php"); ?>
<?php require_once('../admin_header.php'); ?>
<link href="../admin_style.css" rel="stylesheet"> 
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">        
      
    <div class="container-fluid"> 
           <div class="row">
               
<?php require_once('../admin_sidebar.php'); ?>  

 <?php
 require_once('../connect.php');

$sql = "SELECT * FROM aboutus"; 

$stmt = $pdo->prepare($sql);
$stmt->execute();

$printers = $stmt->fetch(PDO::FETCH_ASSOC);

?>
  
       
<main class="col-md-10 content">
   
   <h2 class="pb-2">О компании </h2>  
    
<h4>Добавление, редактирование и удаление</h4>
     
 <form action="update_aboutus.php" method="post">
 
 <div class="form-group">
    <input type="text" class="form-control" name="title" id="id" value="<?= $printers['title'];?>">
  </div>
 <div class="form-group">
    <textarea class="form-control" name="content1" id="id2" rows="5"><?= $printers['content1']; ?></textarea>
  </div>
      
      <div class="form-group">
    <textarea class="form-control" name="content2" id="id3" rows="6"><?= $printers['content2']; ?></textarea>
  </div>
  
   <div class="form-group">
         <button class="btn btn-warning" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
 Изменить</button>
     </div>
 </form>
       
        </main>
    </div>
</div>


  <?php require_once('../admin_footer.php'); ?>