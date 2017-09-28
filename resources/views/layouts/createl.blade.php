<div class="createcontent">
<br>
	<form action="{{ url('admin/createcat') }}" method="POST">
	{!! csrf_field() !!}

		Раздел:&nbsp;<select name="section" size="1">
			<option value="1">Общее</option>
			<option value="2">Досуг</option>
		</select><br><br>
		Статус темы:&nbsp;<select name="close" size="1">
			<option value="1">Открытая</option>
			<option value="0">Закрытая</option>
		</select><br><br>
		Имя:&nbsp;<input type="text" name="name"><br><br>
		Автор:&nbsp;<input type="text" name="author"><br><br>
		<input type="submit" value="Создать" name="submit">
	</form>
</div>