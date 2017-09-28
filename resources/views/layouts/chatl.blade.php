<section class="bodysection">
<br>
<br>
<div class="container">
  <div class="row">

  <?php if(isset($_SESSION['user'])): ?>
  <div class="Page">

    <div class="ChatBox">

    <div class="ChatBlock">
      <span style="font-size: 11pt">
        <?php foreach ($messageLists as $showmessage): ?>
          <ul>
            <li style="color:green;display: inline-block;"><?php echo $showmessage['name'];?>:</li>
            <li style="color:black;display: inline-block;margin-left: 10px;"><?php echo $showmessage['message'];?>-</li>
            <li style="color:red;display: inline-block;margin-left: 10px;"><?php echo $showmessage['vremya'];?></li>
          </ul>
          <hr>
        <?php endforeach; ?>
      </span>
    </div>
    </div>
  </div>
    <form action="#" method="POST">
    <br>
    <textarea class="ChatMessage" name="text" placeholder="Текст сообщения" requred id="" cols="90" rows="3"></textarea>
      <br><input type="submit" name="enter" value="Отправить"><input type="reset" value="Очистить">
    </form>

  <?php else: ?>
    <p style="color: red;font-size: 14pt;font-weight: bold;text-align: center;"><br><br><br><br>ТОЛЬКО ЗАРЕГЕСТРИРОВАННЫЕ ПОЛЬЗОВАТЕЛИ МОГУТ ПОЛЬЗОВАТЬСЯ ЧАТОМ! <br><a href="/registration/">Зарегистрируйтесь!</a></p><br><br><br><br><br><br><br><br><br>
  <?php endif; ?>


</div>
</div>

</section>