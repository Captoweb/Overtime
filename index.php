<?php
 require_once('connect.php');

$sql = "SELECT * FROM aboutus"; 

$stmt = $pdo->prepare($sql);
$stmt->execute();

$printers = $stmt->fetch(PDO::FETCH_ASSOC);

?>
  
  <?php require_once('header.php'); ?>

  <div class="slide">
           <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner102new.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner213new.jpg" alt="Second slide">
    </div> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--end of carousel-->
       </div>
   </div>
   
   <section class="services">
        <div class="container">
           <h3>Наши услуги</h3>
            <div class="row">
              <div class="col-sm-6 col-md-3 plus text-center">
                <a href=refilling.php>
                <div class="card">
                <img class="card-img-top" src="img/zapravka.jpg" alt="Card image cap">
                 <div class="card-body">
                      <p class="card-text">Заправка картриджей</p>
                </div>         
              </div></a>
                </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
               <a href="printers_repair.php"> 
                <div class="card">
                <img class="card-img-top" src="img/Repair3.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Ремонт принтеров</p>
                    </div>
                  </div></a>
              </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
               <a href="cartridge_repair.php"> 
                <div class="card">
                <img class="card-img-top" src="img/kartr.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Ремонт картриджей</p>
                    </div>
                  </div></a>
              </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
               <a href="cartridge_sale.php">
                <div class="card">
                <img class="card-img-top" src="img/toner2.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Продажа картриджей</p>
                    </div>
                  </div></a>
              </div>
              
            </div>
        </div>
   </section>
   
  <section class="ourplus">
       <div class="container">
          <h3>Наши преимущества</h3>
           <div class="row">
             
              <div class="col-md  text-center">
               <div class="card2"> 
               <ion-icon name="jet"></ion-icon>
                <h5>Быстро</h5>
                <p>Заправка картриджа 5-10минут</p>
                </div>
              </div>
              
               <div class="col-md  text-center">
               <div class="card2"> 
               <ion-icon name="hammer"></ion-icon>
                   <h5>Надежно</h5>
                   <p>Гарантия на все
                    произведенные работы</p>
                </div>
              </div>
             
              <div class="col-md  text-center">
               <div class="card2 right"> 
               <ion-icon name="ribbon"></ion-icon>
               
                <h5>Качественно</h5>
                <p>У нас только опытные мастера</p>
                </div>
              </div>
           </div>
       </div>
   </section>
   
   <section class="aboutus">
       <div class="container">
              <h3><?= $printers['title']; ?></h3>
               <div class="row">
                 <div class="col-md-12">
                     
                   <p>
                     <?= $printers['content1']; ?>
                   </p>

                   <p>
                      <?= $printers['content2']; ?>
                    </p>
               </div> 
           </div>
       </div>
   </section>
   
   
    <section class="contact">
      <div class="container">
      <h3>Свяжитесь с нами</h3>
       
      <div class="row">
        <div class="col-md-4 ">	
		 <div class="contact_info">
                            
                    <h4>Наш адрес</h4>
                    <p>Ростов-на-Дону, Социалистическая, 141, оф 17 </p>

                    <h4>Наш телефон</h4>
                    <p>8-950-867-84-78</p>

                    <h4>E-mail</h4>
                    <p>over-time-w@mail.ru</p>
                            
             </div>
          
        </div>
        
        <div class="col-lg-8">
          <form action="mail.php" method="POST">
              <div class="form-group">
                
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                
                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон">
              </div>
              
              <div class="form-group">
                
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Опишите проблему"></textarea>
              </div>
              <button type="submit" class="btn btn-primary violet">Отправить</button>
         </form>
       
        </div>
      </div>
        </div>
    </section>
  
   
<?php require_once('footer.php'); ?>
     
    
    
