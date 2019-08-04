<?php require_once('../admin_header.php'); ?>
<link href="../admin_style.css" rel="stylesheet"> 
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">              
       <div class="container-fluid"> 
           <div class="row">
               
               
<?php require_once('../admin_sidebar.php'); ?> 
 
<?php require_once('../connect.php'); ?> 
     
           
       
<main class="col-md-10 content">
   
   <h2>Добавть картридж</h2>  
   
 <form action="store.php" method="post">
     <div class="form-group">
         <input type="text" class="form-control" name="printer" placeholder="Принтер">
     </div>
     
     <div class="form-group">
         <input type="text" class="form-control" name="model" placeholder="">
     </div>
     
     <div class="form-group">
         <input type="text" class="form-control" name="price" placeholder="Цена">
     </div>
     
     <div class="form-group">
         <button class="btn btn-success" type="submit"><ion-icon  name="add-circle"></ion-icon> Добавть</button>
     </div>
 </form>   

        </main>
    </div>
</div>


  <?php require_once('../admin_footer.php'); ?>