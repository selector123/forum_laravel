<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">
  <div class="container col-lg-10 col-md-10 col-xs-12 col-sm-12">
    <div class="row">
    <table class="showcat">
      <caption class="showcathead"><?php echo $name[0]->name; ?></caption>
      <?php if(isset($resmessage)): ?>
      <?php foreach ($resmessage as $resmessageitem): ?>

      <tr>
        <td class="messsagetable1"><img src="" width="150" height="150" alt=""><br><p class="blackword"><b><?php echo $resmessageitem->author; ?></b></p></td>
        <td class="messsagetable2"><?php echo $resmessageitem->text; ?></td>
      </tr>

      <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td class="messsagetable1"><img src="" width="150" height="150" alt=""><br><p class="blackword"><b>unknown</b></p></td>
        <td class="messsagetable2">Ваше сообщение будет первым</td>
      </tr>

    <?php endif; ?>

    </table>
    <form action="/theme/<?php echo $name[0]->id; ?>" method="POST">
    {!! csrf_field() !!}

    <br>
    Имя:<input type="text" name="name"><br><br>
    <textarea name="text" placeholder="Текст сообщения" requred id="" cols="90" rows="3"></textarea>
      <br><input type="submit" name="submit" value="Отправить">&nbsp;<input type="reset" value="Очистить">
    </form>
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