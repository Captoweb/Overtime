<?php
 require_once('connect.php');

$sql = "SELECT * FROM cartridge_repair"; 

$stmt = $pdo->prepare($sql);
$stmt->execute();

$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
   <?php require_once('header.php'); ?>
    
  
    <section class="refilling">
       <div class="container">
           <div class="row">
           <div class="col-md">
               <h1>Ремонт картриджей</h1>
                <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Модель оргтехники</th>
                  <th scope="col">Модель картриджа</th>
                  <th scope="col">Цена услуги</th>
                </tr>
              </thead>
                  <tbody>
                    <?php foreach($printers as $printer):?>
                        <tr>
                          <th scope="row"><?= $printer['id']; ?></th>
                          <td><?= $printer['printer']; ?></td>
                          <td><?= $printer['model']; ?></td>
                          <td><?= $printer['price']; ?></td>
                        </tr>
                       <?php endforeach; ?>
                   
                  </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
  

    <?php require_once('footer.php'); ?>
    




