<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">
  
</div>
</div>
<div class="container">
  <div class="row">
  <div class="container col-lg-5 col-md-5 col-sm-12 col-xs-12">
    <div class="row">
      <?php if (isset($errors) && is_array($errors)): ?>
        <UL style="list-style-type: none;">
        <?php foreach ($errors as $error): ?>
          <li style="color: red;">-<?php echo $error; ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
      <br>


      <form action="{{ url('/cabinet') }}" method="POST">
      
      {!! csrf_field() !!}

      <p class="blackword">Email:</p>
        <i style="font-size: 16pt;" class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;<input id="secondform" class="vvod" type="email" name="email" placeholder="E-mail" value="" requred>&nbsp;<span style="color: red;" class="nameerror1"></span><br>
        <p class="blackword" id="paswr">Пароль:</p>
        <i style="font-size: 16pt;" class="fa fa-key" aria-hidden="true"></i>&nbsp;<input id="thridform" class="vvod" type="password" name="password" placeholder="Пароль" value="" requred>&nbsp;<span style="color: red;" class="nameerror2"></span><br><br>
        <input type="submit" name="submit" class="btn btn-default" value="Войти">
      </form>
    </div>
  </div>
  <div class="container col-lg-7 col-md-7 col-sm-12 col-xs-12">
    <div class="row">
      <img src="{{ URL::asset('assets/img/obshenie1.png') }}" width="100%" height="300" alt="">
    </div>
  </div>
  </div>
</div>
<br><br><br><br><br><br>
</section>