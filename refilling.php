<?php
 require_once('connect.php');

$sql = "SELECT * FROM refilling_cartridges";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM refilling_cartridges2";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php require_once("header.php"); ?>

    
    <section class="refilling">
       <div class="container">
           <div class="row">
           <div class="col-md">
              <h1>Заправка картриджей</h1> 
              <h3>Заправка картриджей HP LaserJet</h3> 
               
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
                      <td><?= $printer['cartridge']; ?></td>
                      <td><?= $printer['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
               
               <h3>Заправка картриджей Canon</h3> 
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
                <?php foreach($printers2 as $printer2):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer2['id']; ?></th>
                      <td><?= $printer2['printer']; ?></td>
                      <td><?= $printer2['cartridge']; ?></td>
                      <td><?= $printer2['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
            </div>
        </div>
    </div>
</section>
  

    <?php require_once('footer.php'); ?>
    




