<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Usuaris</h1>
		<ol>
		 @foreach ($users as $user) 
	        <li>
	        	 {{$user->name}} - Posts={{$user->posts->count()}}
	        </li>
	        <br>
    		@foreach( $user->posts as $post)
    			<ol>
    				-{{$post->text}}
    			</ol>
    			<br>
    		@endforeach
		 @endforeach
		 </ol>
</body>
</html>