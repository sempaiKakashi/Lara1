<form method="post" action="/users">
	{!! csrf_field() !!}
	<input type="text" name="name"><br>
	<input type="email" name="email"><br>
	<input type="password" name="password"><br>
	<input type="submit" value="Create">
</form>