	<!-- header -->

<div class="header">
	<div class="top_menu_w3layouts">
		<div class="container">
			<div class="header_left">
				<ul>
					<li><a href="http://www.tecnm.mx/"><img src="{{asset('plugins/images/logotecnmbn.png')}}" width="60" height="35"> Tecnológico Nacional de México</a></li>
					<li><a href="http://itszo.mx/"><img src="{{asset('plugins/images/logoitszoblanco.png')}}" width="35" height="33"> Instituto Tecnológico Superior Zacatecas Occidente<a></li>
				</ul>
			</div>
			<div class="header_right">
				<div class="social-w3licon">
						<a href="https://twitter.com/itszooficial" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://www.facebook.com/itszooficial/" class="social-button facebook"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/itszooficial/" class="social-button instagram"><i class="fa fa-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UCDU1KHbL8HIg1yc68E3kLgg" class="social-button youtube"><i class="fa fa-youtube"></i></a>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="{{asset('/')}}">
							<h1>Servicio Social</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="{{ url('/') }}" class="active">Inicio</a></li>
								@if(Auth::user())
								<li class="dropdown">
									@if(Auth::user()->alumnos())
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Anexos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{{route('solicitud.index')}}">ANEXO XVIII</a></li>
										<li class="divider"></li>
										<li><a href="{{route('rbss.index')}}">ANEXO XXII</a></li>								
										<li class="divider"></li>
										<li><a href="{{route('fecualpss.index')}}">ANEXO XXIII</a></li>
										<li class="divider"></li>
										<li><a href="{{route('facualpss.index')}}">ANEXO XXIV</a></li>
										<li class="divider"></li>
										<li><a href="{{route('feapss.index')}}">ANEXO XXV</a></li>
										<li class="divider"></li>
										<li><a href="{{route('descargar.anexos')}}">Descargar Anexos en blanco</a></li>
										<li class="divider"></li>
									</ul>
								</li>
								<li><a href="{{route('documentos.index')}}">Documentos</a></li>
									@endif
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->nombres}} {{ Auth::user()->apellido_p}} {{ Auth::user()->apellido_m}} <b class="caret"></b></a>
									<ul class="dropdown-menu">
										@if(Auth::user()->alumnos())
											<li><a href="{{route('perfil')}}">Perfil</a></li>
										@endif
										<li class="divider"></li>
										<li><a href="{{ route('logout')}}">Salir</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>
								@endif
								@guest                    
								    <li>
								    	<a href="{{ route('login') }}">Iniciar</a>
								    </li>
								    <li>
								        <a href="{{route('createacces')}}">Registro</a>
								    </li>
							   	@endguest
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>