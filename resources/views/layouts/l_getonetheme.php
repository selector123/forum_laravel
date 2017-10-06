<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">
  <div class="container col-lg-10 col-md-10 col-xs-12 col-sm-12">
    <div class="row">
    
   
   <table class="showindexcat">
    
      

      <caption class="showcatindexhead"><?php echo $name[0]->name; ?></caption>
      <?php $count = 1; ?>
      <?php foreach ($themes as $theme): ?>

      <tr>
        <th class="showcatindexinside"><?php echo $count;$count++ ?>.
        </th>
        <th class="showcatindexinside"><a href="/theme/<?php echo $theme->id; ?>"><?php echo $theme->name; ?></a></th>
        <th class="showcatindexinside">
         темы<br> сообщений</th>
        <th class="showcatindexinside">Автор:<?php echo $theme->author; ?><br>Последнее сообщение:<?php echo $theme->last_post; ?></th>
      </tr>
    
      <?php endforeach; ?>




    </table>






    </div>
    </div>
    <div class="container col-lg-2 col-md-2">
      <div class="row">
        <div>
          <img class="imgr hidden-sm hidden-xs" src="{{ URL::asset('assets/img/rekl.jpg') }}" alt="">
        </div>
        <br>
        <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.ru/pogoda/18" target="_blank"><img src="https://info.weather.yandex.net/18/2.ru.png?domain=ru" border="0" alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>
    </div>
  </div>
</div>
</div>

</section>
