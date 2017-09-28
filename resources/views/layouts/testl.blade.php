<div>
<pre>
{{print_r(Session::all())}}
</pre>
<br><br><center>
	<form action="{{ route('test') }}" method="POST">
	{{ csrf_field() }}
		Имя:<input type="text" name="name" value="{{old('name')}}"><br>
		Фамилия:<input type="text" name="surname"><br><br>
		<input type="submit" value="Отправить!"><br><br>
	</form></center>
</div>