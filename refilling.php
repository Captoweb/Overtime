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

$sql = "SELECT * FROM refilling_cartridges3";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers3 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges4";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers4 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers5 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges6";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers6 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges7";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers7 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges8";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers8 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges9";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers9 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM refilling_cartridges10";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$printers10 = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
               
               <br>
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
               
               <br>
               <h3>Заправка картриджей Samsung</h3> 
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
                <?php foreach($printers3 as $printer3):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer3['id']; ?></th>
                      <td><?= $printer3['printer']; ?></td>
                      <td><?= $printer3['cartridge']; ?></td>
                      <td><?= $printer3['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
               
               <br>
               <h3>Заправка картриджей Brother</h3> 
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
                <?php foreach($printers4 as $printer4):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer4['id']; ?></th>
                      <td><?= $printer4['printer']; ?></td>
                      <td><?= $printer4['cartridge']; ?></td>
                      <td><?= $printer4['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
               
               <br>
               <h3>Заправка картриджей Xerox</h3> 
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
                <?php foreach($printers5 as $printer5):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer5['id']; ?></th>
                      <td><?= $printer5['printer']; ?></td>
                      <td><?= $printer5['cartridge']; ?></td>
                      <td><?= $printer5['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
               
               <br>
               <h3>Заправка картриджей Kyocera</h3> 
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
                <?php foreach($printers6 as $printer6):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer6['id']; ?></th>
                      <td><?= $printer6['printer']; ?></td>
                      <td><?= $printer6['cartridge']; ?></td>
                      <td><?= $printer6['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица -->
               
               <br>
               <h3>Заправка картриджей Panasonic</h3> 
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
                <?php foreach($printers7 as $printer7):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer7['id']; ?></th>
                      <td><?= $printer7['printer']; ?></td>
                      <td><?= $printer7['cartridge']; ?></td>
                      <td><?= $printer7['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица Panasonic -->
               
               <br>
               <h3>Заправка картриджей Sharp</h3> 
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
                <?php foreach($printers8 as $printer8):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer8['id']; ?></th>
                      <td><?= $printer8['printer']; ?></td>
                      <td><?= $printer8['cartridge']; ?></td>
                      <td><?= $printer8['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица Sharp -->
               
               <br>
               <h3>Заправка картриджей Ricoh</h3> 
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
                <?php foreach($printers9 as $printer9):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer9['id']; ?></th>
                      <td><?= $printer9['printer']; ?></td>
                      <td><?= $printer9['cartridge']; ?></td>
                      <td><?= $printer9['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица Ricoh-->
               
               <br>
               <h3>Заправка картриджей Oki</h3> 
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
                <?php foreach($printers10 as $printer10):?>
                    <tr>
                      <th scope="row" class="hidden"><?= $printer10['id']; ?></th>
                      <td><?= $printer10['printer']; ?></td>
                      <td><?= $printer10['cartridge']; ?></td>
                      <td><?= $printer10['price']; ?></td>
                    </tr>
                   <?php endforeach; ?>
              </tbody>
            </table>
               </div><!--/end of адаптивная таблица Oki-->
               
            </div>
        </div>
    </div>
</section>
  

    <?php require_once('footer.php'); ?>
    




