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