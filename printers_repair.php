<?php
 require_once('connect.php');

$sql = "SELECT * FROM printer_repair"; 

$stmt = $pdo->prepare($sql);
$stmt->execute();

$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
  
<?php require_once('header.php'); ?>
    
    <section class="refilling">
       <div class="container">
           <div class="row">
           <div class="col-md">
              <h1>Ремонт лазерных принтеров</h1>
               
               <div class="table-responsive-sm"><!-- адаптивная таблица -->
                <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col" class="hidden">id</th>
                  <th scope="col">Модель оргтехники</th>
                  <th scope="col">Модель картриджа</th>
                  <th scope="col">Цена услуги</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($printers as $printer):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer['id']; ?></th>
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
    </div>
</section>
  

    <?php require_once('footer.php'); ?>
    




