<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>

    
    <!--FONT AWESOME-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fa/font-a/css/font-awesome.min.css') }}" >
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap2.css') }}" >
    
    <!--JAVASCRIPT-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('assets/js/prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script> 
    <!-- include Cycle2 -->
    <script src="{{ URL::asset('assets/js/cycle1.js') }}"></script>

    <!-- include one or more optional Cycle2 plugins -->
    <script src="{{ URL::asset('assets/js/cycle2.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>
  <body>



@section('headnohome')




<header class="headstylevidzhet">
<br>
<br>
  <div class="container">
    <div class="row clearfix">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <p class="headst">Общайся
      <img class="logo" src="{{ URL::asset('assets/img/logo2.png') }}" alt="">
      Развивайся</p>
    </div>
    <br>
    </div>
  </div>
  <br>
  <div class="container ">
 <div class="row">
          <div id="navigation" class="navbar navbar-default">
      <!--navbar-fixed-top,bottom полоса навиг прикрепится к верху и при прокрутке веб страницы будет оставаться вверху-->
      <!--ЕСЛИ default то цвет серый ,если inverse то черный-->
        <div class="container">
          <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#responsive-menu">
          <!--data toggle при нажатии открывается класс-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          </div>
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a class="nav-wr" href="/">01.ГЛАВНАЯ</a></li>
              <li><a class="nav-wr" href="/category">02.КАТЕГОРИИ</a></li>
              <li><a class="nav-wr" href="#">03.ПРИЛОЖЕНИЕ</a></li>
              <li class="dropdown">
              <a href="#" class="nav-wr dropdown-toggle" data-toggle="dropdown">ПОЛЬЗОВАТЕЛЯМ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/login/">Войти</a></li>
                <li><a href="/registration/">Регистрация</a></li>
              </ul>
              </li>
              <li><a class="nav-wr" href="/chat/">05.ЧАТ</a></li>
              <li><a class="nav-wr" href="/contacts/">06.ПИШИТЕ НАМ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
</header>


@show








@section('head')
<header class="headstyle">
<br>
<br>
  <div class="container">
    <div class="row clearfix">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <p class="headst">Общайся
      <img class="logo" src="{{ URL::asset('assets/img/logo2.png') }}" alt="">
      Развивайся</p>
    </div>
    <br>
    </div>
  </div>
  <br>
  <div class="container ">
 <div class="row">
          <div id="navigation" class="navbar navbar-default">
      <!--navbar-fixed-top,bottom полоса навиг прикрепится к верху и при прокрутке веб страницы будет оставаться вверху-->
      <!--ЕСЛИ default то цвет серый ,если inverse то черный-->
        <div class="container">
          <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#responsive-menu">
          <!--data toggle при нажатии открывается класс-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          </div>
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a class="nav-wr" href="/">01.ГЛАВНАЯ</a></li>
              <li><a class="nav-wr" href="/category">02.КАТЕГОРИИ</a></li>
              <li><a class="nav-wr" href="/pril/">03.ПРИЛОЖЕНИЕ</a></li>
              <li class="dropdown">
              <a href="#" class="nav-wr dropdown-toggle" data-toggle="dropdown">04.ПОЛЬЗОВАТЕЛЯМ<b class="caret"></b></a>
              <ul class="dropdown-menu">
              


              <?php if(isset($_SESSION['user'])): ?>
                <li><a href="/exit/">Выйти</a></li>
              <?php else: ?>
                <li><a href="/login/">Войти</a></li>
              <?php endif; ?>
                <li><a href="/registration/">Регистрация</a></li>




              </ul>
              </li>
              <li><a class="nav-wr" href="/chat/">05.ЧАТ</a></li>
              <li><a class="nav-wr" href="/contacts/">06.ПИШИТЕ НАМ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container hidden-xs">
    <div class="row">
      <h3 class="top-cat"><span class="editcolor">Топ</span> обсуждаемых категорий:</h3>
    </div>
  </div>
  <br>
  <div class="container hidden-xs">
    <div class="row">
      <div class="col-sm-4 col-xs-12 cattehnika1">
      <div class="fadeel">
        <i class="fa fa-search" aria-hidden="true"></i>
      </div>
        <img class="img-responsive top-category" src="{{ URL::asset('assets/img/computer.jpg') }}" alt="">
        <div style="display: none;border-radius: 0px 0px 5px 5px;" class="cat_bottom cattehnika">
          <p class="blackword cattehnikawr">Техника</p>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 cattehnika2">
      <div class="fadeel1">
        <i class="fa fa-search" aria-hidden="true"></i>
      </div>
        <img class="img-responsive top-category" src="{{ URL::asset('assets/img/sport.jpg') }}" alt="">
        <div style="display: none;border-radius: 0px 0px 5px 5px;" class="cat_bottom catsport">
          <p class="blackword cattehnikawr">Спорт</p>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 cattehnika3" style="margin-bottom: 7px">
      <div class="fadeel2">
        <i class="fa fa-search" aria-hidden="true"></i>
      </div>
        <img class="img-responsive top-category" src="{{ URL::asset('assets/img/cars.jpg') }}" alt="">
        <div style="display: none;border-radius: 0px 0px 5px 5px;" class="cat_bottom catavto">
          <p class="blackword cattehnikawr">Авто</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container pril-menu hidden-xs" id="top_nav">
    <div class="row">
      <div class="tabs">
            <ul class="nav nav-tabs">
              <li id="tab-1" class="active">
              <a href="#tab-1" data-toggle="tab">
              <img src="{{ URL::asset('assets/img/megaphone.png') }}" class="icons" alt=""></a>
              </li>
              <li id="tab-2">
              <a href="#tab-2" data-toggle="tab"><img src="{{ URL::asset('assets/img/brushpencil.png') }}" class="icons" alt=""></a>
              </li>
              <li id="tab-3">
              <a href="#tab-3" data-toggle="tab"><img src="{{ URL::asset('assets/img/smartphone.png') }}" class="icons" alt=""></a>
              </li>
              <li id="tab-4">
              <a href="#tab-4" data-toggle="tab"><img src="{{ URL::asset('assets/img/radio.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-5" data-toggle="tab"><img src="{{ URL::asset('assets/img/toolbox.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-7" data-toggle="tab"><img src="{{ URL::asset('assets/img/travelerbag.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-8" data-toggle="tab"><img src="{{ URL::asset('assets/img/toolbox.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-9" data-toggle="tab"><img src="{{ URL::asset('assets/img/news.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-10" data-toggle="tab"><img src="{{ URL::asset('assets/img/brushpencil.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-11" data-toggle="tab">&nbsp;<img src="{{ URL::asset('assets/img/car.png') }}" class="icons" alt="">&nbsp;</a>
              </li>
              <li>
              <a href="#tab-12" data-toggle="tab"><img src="{{ URL::asset('assets/img/plane.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-13" data-toggle="tab"><img src="{{ URL::asset('assets/img/music.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-14" data-toggle="tab"><img src="{{ URL::asset('assets/img/video.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-15" data-toggle="tab"><img src="{{ URL::asset('assets/img/bookshelf.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-16" data-toggle="tab"><img src="{{ URL::asset('assets/img/cart.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-17" data-toggle="tab"><img src="{{ URL::asset('assets/img/trophy.png') }}" class="icons" alt=""></a>
              </li>
              <li>
              <a href="#tab-9" data-toggle="tab">&nbsp;<img src="{{ URL::asset('assets/img/dev.png') }}" class="icons" alt="">&nbsp;</a>
              </li>
              <li>
              <a href="#tab-9" data-toggle="tab"><img src="{{ URL::asset('assets/img/gamecontroller.png') }}" class="icons" alt=""></a>
              </li>

            </ul>
          </div>
    </div>
  </div>
</header>

@show








@section('content')
<section class="bodysection">
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
  <div class="container col-lg-10 col-md-10 col-xs-12 col-sm-12">
    <div class="row">





    <table class="showindexcat">
      <caption class="showcatindexhead">123</caption>
      <tr>
        <th class="showcatindexinside">1.
        </th>
        <th class="showcatindexinside"><a href="">Форум уже работает!</a></th>
        <th class="showcatindexinside">
         темы<br> сообщений</th>
        <th class="showcatindexinside">Последнее сообщение:<br></th>
      </tr>
    
   




    </table>
    </div>
    </div>
    <div class="container col-lg-2 col-md-2">
      <div class="row">
        <div>
          <img class="imgr hidden-sm hidden-xs" src="{{ URL::asset('assets/img/rekl.jpg') }}" alt="">
        </div>
    </div>
  </div>
</div>
</div>

</section>
@show








@section('footer')



<?php if(isset($_SESSION['user'])): ?>

<div class="navbar navbar-inverse navbar-fixed-bottom">
      <!--navbar-fixed-top,bottom полоса навиг прикрепится к верху и при прокрутке веб страницы будет оставаться вверху-->
      <!--ЕСЛИ default то цвет серый ,если inverse то черный-->
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand"><?php echo $username['name']; ?></a>
          </div>
          <div class="collapse navbar-collapse" id="responsive-menu">
            
            <form action="" class="navbar-form navbar-right">
            <!--navbar-right форма прижалась к правой стороне-->
            <a href="/cabinet/">
              <div class="btn btn-default">
                <i class="fa fa-sign-in">&nbsp;КАБИНЕТ</i>
                </div>
              </a>
              <a href="/exit/">
              <div class="btn btn-default">
                <i class="fa fa-sign-in">&nbsp;ВЫХОД</i>
                </div>
              </a>
            </form>
          </div>
        </div>
      </div>
<?php endif;?>

<DIV ID = "toTop" > ^ Наверх </DIV>
<footer class="foot">
  <div class="container">
    <div class="row">
    <hr class="delitel">
    <div class="container col-lg-1 col-md-1">
      <div class="row">
        <p class="ssilki">ССЫЛКИ:</p>
        </div>
        </div>
        <div class="container col-lg-11 col-md-11">
          <div class="row">
            <ul class="footlist">
              <li class="footwr"><a href="/">Главная</a></li>
              <li class="footwr"><a href="#">Категории</a></li>
              <li class="footwr"><a href="#">Чат</a></li>
              <li class="footwr pull-right">Все права защищены &copy;<?php echo date("Y"); ?></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</footer>
<script src="/template/js/salvattore.min.js"></script>
<script>
    </script>
  </body>
</html>
@show

