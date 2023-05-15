<head>
  <title></title>

  <link rel="icon" href="image/Qarie.png" type="image/icon type">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Aref+Ruqaa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="nav/nav.css">


</head>

<body id="bannerStore">
  <!--header for qarie-->
  <a href="index.php"><img src="image/Qarie.png" class="logo"></a>

  <?php include("nav/nav.php"); ?>

  <header>
    <nav class="navbar">
      <a href="#prodect">المنتجات</a>
      <a href="#Features">مميزات المتجر</a>
      <a href="#review">الاراء العملات</a>
    </nav>
  </header>

  <!------------------------------offer ------------------------->
  <div class="offer">
    <div class="custom-shape-divider-bottom-1649973653">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
      </svg>
    </div>
    <div class="textOffer">
      <h1 id="newIn"><b> جديدنا كتاب <br>الداء و الدواء لابن القيم</b> </h1>
      <br>
      <!-- <h2>الداء والدواء</h2> -->
      <br>
      <small>
        ما تقول السادة العلماء أئمة الدين رضى الله عنهم أجمعين في رجل ابتلى
        <br>
        ببلية وعلم أنها إن استمرت به أفسدت عليه دنياه وآخرته؟ وقد اجتهد في دفعها
        <br>
        ن نفسه بكل طريق فما يزداد إلا توقدا وشدة فما الحيلة في دفعها؟
        <br>
        وما الطريق إلى كشفها؟
      </small>
      <br><br><br>
      <a href="/" class="bn11">اشتر الان !</a>
    </div>
    <div class="bookOffer">
      <img src="image/boook.png" alt="">
    </div>
  </div>
  <!--offer end-->


  <!---------------------------التصنيفات------------------------------------->
  <div id="prodect" class="product">
    <h2 class="headTitle">المنتجات</h2>
    <br>
    <hr class="rounded">

    <div class="w3-content" style="max-width:400px">
      <div class="mySlides w3-container w3-red">
        <p> <img src="image/knowledgebook3.png" style="width:50%"><img src="image/knowledgebook1.png" style="width:50%"></p>

      </div>
      <div class="mySlides w3-container w3-red">
        <p> <img src="image/historybook1.png" style="width:50%"><img src="image/historybook3.png" style="width:50%"></p>
      </div>

      <div class="mySlides w3-container w3-red">
        <p> <img src="image/islamicbook1.png" style="width:50%"><img src="image/islamicbook2.png" style="width:50%"></p>
      </div>
    </div>
    <div class="textProuduct ">
      <h1 id="newIn">عروضنا تصل حتى 50% </h1>
      <br>
      <p style="font-size: 195%;">
        سارع الاّن قبل انتهى العرض !!
      </p>
      <br><br>
      <button class="button-3" role="button"> <a id="button-3" href="product.php">الانتقال الى المتجر</a> </button>
    </div>
  </div>

  <br>
  <!---------------------------المميزات------------------------------------->
  <div id="Features" class="features">
    <h2 class="headTitle">المميزات</h2>
    <br>
    <hr class="rounded">
    <div class="rowFe">

      <div class="cardf">
        <img src="image/icon-1.png" alt="Avatar">
        <div class="conf">
          <h4><b>توصيل مجاني</b></h4>
          <p>للطلبات اعلى من 200 ريال</p>
        </div>
      </div>

      <div class="cardf">
        <img src="image/icon-2.png" alt="Avatar">
        <div class="conf">
          <h4><b>ضمان إستعادة مالك</b></h4>
          <p>إرجاع خلال 10 ايام</p>
        </div>
      </div>
      <div class="cardf">
        <img src="image/icon-3.png" alt="Avatar">
        <div class="conf">
          <h4><b>هدايا وعروض</b></h4>
          <p>لكل الطلبات</p>
        </div>
      </div>
    </div>
  </div>

  <!---------------------------الاراء ------------------------------------->
  <div id="review" class="product">
    <h2 class="headTitle">اراء العملاء</h2>
    <br>
    <hr class="rounded">
    <div class="reviews">

      <!--review-->
      <section class="review" id="review">
        <!-- ---------------testimonial-------------------->
        <div class="testimonial">
          <div class="small-container">
            <h2></h2>
            <div class="rowRev">
              <!--first-->
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                  توصيل سرريع , خدمة متميزة
                </p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <img src="image/img-1.jpg" alt="zeeshansaeed" /><br>
                <h3>افنان الطلحي</h3>
              </div>
              <!--second-->
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                  ليس قفط التصميم رائع بل الخدمة ايضا روعة
                </p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <img src="image/img-2.jpg" alt="zeeshansaeed" /><br>
                <h3> بشائر الغامدي</h3>
              </div>

              <!--third-->
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                  عروض جبارة شكرا لكم على خدمتكم الرائعه
                </p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <img src="image/img-3.jpg" alt="zeeshansaeed" /><br>
                <h3> وجود مطهر</h3>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="nav/nav.js"></script>
  <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {
        slideIndex = 1
      }
      x[slideIndex - 1].style.display = "block";
      setTimeout(carousel, 2700);
    }
  </script>
</body>

</html>