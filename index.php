<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])){
  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $fage = $_POST['fage'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $sql = "INSERT INTO ariza (name, fname, fage, phone, comment) VALUES (:name, :fname, :fage, :phone, :comment)";
  $stmt = $conn -> prepare($sql);
  $stmt -> execute([
      'name' => $name,
      'fname' => $fname,
      'fage' => $fage,
      'phone' => $phone,
      'comment' => $message
  ]);

  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>33 - ixtisoslashtirilgan umumta'lim maktabi</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>33 -</em> Maktab</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Bosh sahida</a></li>
        <li><a href="#section2">Biz haqimizda</a></li>
        <li><a href="#section4">To'garaklar</a></li>
        <li><a href="#section6">Ariza</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/bg.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Farg'ona shahri Farg'ona tumani</h6>
        <h2><em>33 - </em> umumta'lim maktabi</h2>
        <div class="main-button">
          <div class="scroll-to-section"><a href="#section2">Maktab haqida</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>2 ta xorijiy til</h4>
              </div>
              <div class="content-hide">
                <p>Normal maktablarda o'quvchilar 1 ta xorijiy til o'rganish imkoniyatiga ega, bizning maktabimizda
                  o'quvchilar 2 ta xorijiy til o'rganishadi</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-desktop"></i>Eng yangi jihozlar va Texnologiyalar</h4>
              </div>
              <div class="content-hide">
                <p>Maktabimiz eng oxirgi model texnika - jihozlari bilan jihozlangan. Har bir kompyuter eng kuchli
                  detallardan tashkil topgan (i5 - 8 gb OZU. GeForce 1050 Ti).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-wifi"></i>Internet tezligi</h4>
              </div>
              <div class="content-hide">
                <p>Maktabimiz internet tezligi dasturchilar va Robototexnikaga qiziquvchi o'quvchilar talab darajasiga
                  to'g'ri kela oladiganchalik tez. (150-200 mbps)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Maktabimizning avfzalliklari?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Maktab tarixi</a></li>
              <li><a href='#tabs-2'>Hozirgi xarakatlar</a></li>
              <li><a href='#tabs-3'>Yaqin oradagi rejalar</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://www.reigate-school.surrey.sch.uk/ckfinder/userfiles/images/Reigate_School_Home_1.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Tarix</h4>
                    <p>Maktabimizga 1956-asos solingan. Hozirda maktabimiz maydoni 1,3 gektarni tashkil etadi. Bugungi
                      kunda maktabimizda 1.348 nafar o'quvchi tahsil oladi.

                      23 yil davomida maktabimiz Germaniya mamkalati bilan hamkorlik qilib kelmoqda va hozirgi kungacha
                      100 dan ortiq o'quvchilarimiz Germaniya mamlakatiga borib til darajasini oshirib qaytdi.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://www.collinsdictionary.com/images/full/school_309241295.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Hozirgi xarakatlar</h4>
                    <p>Hozirgi kunda maktabimiz o'quvchilari 2 ta xorijiy til va Kasb-Hunar o'rganishi uchun mustahkam
                      poydevor yaratilgan. Barcha shart-sharoitlar yaratib berilgan.

                      23-Fevral kuni maktabimizga "Maktabgacha va Maktab ta'limi vaziri" - "Umarova Hilola O'ktamovna"
                      tashrif buyurib, maktabimizda yaratilgan barcha imkoniyatlarni o'z ko'zlari bilan ko'rib,
                      o'quvchilar bilan muloqot qildilar</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://www.gazeta.uz/media/img/2023/11/DqNouj17006490787982_l.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Yaqin oradagi rejalar</h4>
                    <p>Kelajakdagi asosiy maqsadlarimizda maktabimizni Xalqaro miqyosdagi maktabga aylantirish va Yetuk
                      kadrlarni tayyorlab berish.

                      Kasb-Hunarga qiziqishi baland o'quvchilarni o'z yo'nalishlari bo'yicha bilib olishariga yordam
                      beruvchi resurslarni yaratish.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Maktabimizdagi to'garaklar</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <?php
          $stmt = $conn->prepare("SELECT * from courses ORDER BY id DESC");
          $stmt->execute();
          $products = $stmt->fetchAll();

          $msg = '';
          if (count($products) == 0) {
            $msg = "To'garaklar hali mavjud emas";
          } else {
            $i = 0;
            foreach ($products as $row) {
              $i = $i + 1;
          ?>
              <div class="item">
                <img src="./panel/courses/<?= $row['pic'] ?>" alt="Course #1" width="200px" height="240px">
                <div class="down-content">
                  <h4><?= $row['name'] ?></h4>
                  <p><?= $row['description'] ?></p>
                  <div class="text-button-free" style="margin-top: -10px !important; float: left;">
                    <a href="#"><?= $row['teacher'] ?> <?= $row['start'] ?></a>
                  </div>
                </div>
              </div>

          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Ariza</h2>
          </div>
          <p style="margin: 15px; color: white; display: flex; justify-content: center;">Maktabga qabul qilish bo'yicha
            ariza topshirish</p>
        </div>
        <div class="col-md-6">

          <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->

          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ismingiz" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="fname" type="text" class="form-control" id="email" placeholder="Farzandingizning ismi" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="phone" type="number" class="form-control" id="phone" placeholder="Telefon raqamingiz" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="fage" type="number" class="form-control" id="fage" placeholder="Farzandingizning yoshi" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="O'zingiz haqingizda qisqacha ma'lumot..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button" name="submit">Yuborish</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.982358194893!2d71.77153050287669!3d40.36491553075715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb84ba1d76a659%3A0x7bc998c6a195e3d5!2z0KLQkNCi0KMg0KTQpA!5e0!3m2!1sru!2s!4v1704538034237!5m2!1sru!2s" width="100%" height="492px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>33 - ixtisoslashtirilgan umumta'lim maktabi</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>