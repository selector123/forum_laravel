<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">
  <div class="container col-lg-10 col-md-10 col-xs-12 col-sm-12">
    <div class="row">
    
   <?php $count = 1; ?>
    <?php foreach ($obscat as $obscatitem): ?>
      
      <a class="catlink" href="/category/<?php echo $obscatitem->id; ?>">
    <table class="showcat">
    <caption class="showcathead"><?php echo $obscatitem->name; ?></caption>
      <tr>
        <th class="mainpict">
          <img class="img-responsive" src="<?php echo $obscatitem->pict; ?>" alt="<?php echo $obscatitem->name; ?>">
        </th>
        <th class="showcatinside"><?php echo $obscatitem->description; ?></th>
        <th class="rightcol">
          <ul class="tablebottom">
          <li><i class="fa fa-bookmark-o" aria-hidden="true"></i>Количество тем: <?php echo $themequantity[$count]; ?></li>
          <?php $count++; ?>
        </ul>
        </th>
      </tr>
    </table>
    </a>
        <?php endforeach; ?>






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










