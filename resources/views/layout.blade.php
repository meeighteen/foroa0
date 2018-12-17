<!DOCTYPE html>
<html>
<head>
	<title>JuicyBarter</title>
</head>
<body>
	<header>
		<nav>
			<a href="{{ route('start') }}">Inicio</a>
			<a href="{{ route('feed') }}">Feed</a>
			<a href="{{ route('miperfil') }}">Mi perfil</a>
			<a href="{{ route('postear') }}">Postear</a>
		</nav>
	</header>
	@yield('contenido')
	
	<footer>Copyright {{ date('Y') }} </footer>

</body>
</html>