<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laravel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/modal_window.css" rel="stylesheet">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/modal_window.js"></script>
<script>
function delete_position (url, ask){
	if(confirm(ask)){
		location.href=url;
	}
		return false;
}
</script>
</head>

<body style="background-image: url(chocko_back_light.png);">
  <!-- Navigation -->
  

  <!-- Header -->
  <header>
	<nav class="navbar navbar-expand-lg navbar-dark bg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{asset('/')}}"><img class="logo" src="chocko.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item">
            <a class="nav-link" href="{{asset('about')}}">О нас</a>
          </li>
		  	<li class="nav-item">
					<a class="nav-link" href="{{asset('course')}}">Курсы</a>
			</li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contacts')}}">Контакты</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="{{asset('allportfolios')}}">Галерея</a>
          </li>
		  
		  @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}"><img src="Auth.png"></a>
								</li>
                        @else
							<li class="nav-item">
									<a class="nav-link" href="{{asset('portfolio')}}">Портфолио</a>
							</li>
							<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
						
                            
                        @endguest
        </ul>
      </div>
    </div>
  </nav>
    
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row"  style="margin-top:46px">
      <div class="col-md-10 mb-5">
       @yield('content')
	  </div>
    </div>
    <!-- /.row -->
	

    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 col-12 footer">
    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<a class="footer_menu" href="{{asset('/')}}">Главная</a>
				</ul>
				<ul>
					<a class="footer_menu" href="{{asset('about')}}">О нас</a>
				</ul>
				<ul>
					<a class="footer_menu" href="{{asset('course')}}">Курсы</a>
				</ul>
			</div>
			<div class="col-md-4">
				<p class="m-0 text-center text-white" style="position: relative; top: 25%;">Copyright &copy; Iryna Solonina 2021</p>
			</div>
			<div class="col-md-4">
				<div class="m-0 text-white" style="text-align: right;">
					БГУИР ИИТ<br>
					Минск, ул. Козлова, д. 28<br>
					<address>
						<abbr title="Phone">P:</abbr>
						(123) 456-7890
						<br>
						<abbr title="Email">E:</abbr>
						<a href="mailto:#">name@example.com</a>
					</address>
				</div>
			</div>
		</div>
    </div>
    <!-- /.container -->
  </footer>
</div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="js/jquery-3.5.1.min.js"></script>
</body>

</html>
