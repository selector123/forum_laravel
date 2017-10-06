<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">
  
</div>
</div>
<div class="container">
  <div class="row">
   <div class="container col-md-5 col-lg-5 col-xs-12 col-sm-12">
     <div class="row">
         <?php if (isset($errors) && is_array($errors)): ?>
        <UL style="list-style-type: none;">
        <?php foreach ($errors as $error): ?>
          <li style="color: red;">-<?php echo $error; ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
      <br>
        <form action="{{ url('/sregistration') }}" method="POST">

        {!! csrf_field() !!}

          <p class="blackword">Имя:</p>
            <span class="regwidzh"><i style="font-size: 16pt;" class="fa fa-id-card-o" aria-hidden="true"></i></span>&nbsp;<input class="vvod" id="firstform" type="text" name="name" placeholder="Имя" value="";">&nbsp;<span class="nameerror"></span><BR>
            <p class="blackword">Email:</p>
            <i style="font-size: 16pt;" class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;<input class="vvod email" id="secondform" type="email" name="email" placeholder="E-mail" value="">&nbsp;<span style="color: red;" class="nameerror1"></span><BR>
            <p class="blackword">Пароль:</p>
            <i style="font-size: 16pt;" class="fa fa-key" aria-hidden="true"></i>&nbsp;<input class="vvod pass" id="thridform" type="password" name="password" placeholder="Пароль" value="">&nbsp;<span style="color: red;" class="nameerror2"></span><BR><br>
            <input type="submit" name="submit" class="btn btn-default" value="Регистрация"></input>
          </form>
     </div>
   </div>
   <div class="container col-md-7 col-lg-7 col-xs-12 col-sm-12">
     <div class="row">
       <img src="{{ URL::asset('assets/img/obshenie1.png') }}" width="100%" height="300" alt="">
     </div>
   </div>
  </div>
</div>
<br><br><br><br><br><br>
</section>