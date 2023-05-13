<?php include 'logic.php'?>
<head>
  <title>Аптека</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Начните писать текст">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Apteka.ru</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.html">Главная</a></li>
                <li><a href="shop.html">Товары</a></li>
                <li class="has-children">
                  <a href="#"></a>
                  <ul class="dropdown">
                    <li><a href="#">Лекарственные средства</a></li>
                    <li class="has-children">
                      <a href="#">Медицинские товары и техника</a>
                      <ul class="d
                    </li>
                    <li><a href="#">Детские товары</a></li>ropdown">
                        <li><a href="#">Аптечки</a></li>
                        <li><a href="#">Товары для диабетиков</a></li>
                        <li><a href="#">Ортопедические товары</a></li>
                        <li><a href="#">Изделия для офтоломогии</a></li>
                      </ul>
                    <li><a href="#">Биологические добавки и бады</a><

                            <li class="login pb-4">
                                <?php if(!isset($_SESSION['session_username'])){ ?>
                                    <h5>Вы не авторизованы</h5>
                                    <a href="enter.php">Ввести логин и пароль</a> или <a href="Register.php">зарегестрироваться</a>
                                    <?php
                                }
                                else{?>
                                    <h5>Вы авторизованы</h5>
                                    <p>Добро пожаловать <?php echo $_SESSION['session_username'] ?> </p>
                                    <form action="logic.php" method="post">
                                        <button type="submit" class="btn btn-danger" name="Exit">Выйти</button>
                                    </form>
                                <?php }?>
                            </li>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalLabel">Заказать звонок</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="modal-body">
                                                        <label for="exampleInputText1" class="form-label">Ваше имя*</label>
                                                        <input type="text" class="form-control" id="exampleInputText1" />
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="exampleInputPhone1" class="form-label">Телефон*</label>
                                                        <input type="phone" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                                        <label class="form-check-label" for="exampleCheck1">Я согласен на обработку персональных данных</label>
                                                    </div>
                                                    <div class="modal-body">
                                                        <button type="submit" class="btn btn-primary">Отправить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                 </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Помощь</h3>
            <ul class="list-unstyled">
              <li><a href="#">Часто задаваемые вопросы</a></li>
              <li><a href="#">Как сделать заказ</a></li>
              <li><a href="#">Обратная связь</a></li>
              <li><a href="#">Правила доставки</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Контактная информация</h3>
              <ul class="list-unstyled">
                <li class="address">Адрес: 141400, ОБЛАСТЬ МОСКОВСКАЯ, ГОРОД ХИМКИ, ШОССЕ ВАШУТИНСКОЕ, 22</li>
                <li class="phone"><a href="tel://23923929210">8 800 700 88 88</a></li>
              </ul>
            </div>




  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>


                        

                       >

