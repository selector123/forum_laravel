<div class="createcontent">
<br><br>
	<form action="">
		Раздел:<input type="text" name="section" value="<?php echo $result[0]['section'];?>"><br><br>
		Статус темы:<input type="text" name="close" value="<?php echo $result[0]['close'];?>"><br><br>
		Имя темы:<input type="text" name="name" value="<?php echo $result[0]['name'];?>"><br><br>
		Автор темы:<input type="text" name="author" value="<?php echo $result[0]['author'];?>"><br><br>
		<input type="submit" name="submit">
	</form>
</div>