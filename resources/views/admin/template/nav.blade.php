<nav class="navbar navbar-expand" style="background-color: #59152f; color: #fff;">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars" style="color: #fff;"></i></a>
    <a class="navbar-brand" href="{{url('admin/')}}" style="color: #fff;"><img src="{{asset('plugins/images/logoitszoblanco.png')}}" alt="ITSZO" class="brand-image img-circle elevation-3"
           style="opacity: .8; width: 25px; height: 25px;">Vinculacón-Servicio Social</a>

    <div class="navbar-collapse collapse">
        @if(Auth::user()->admin())
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                    <a href="#" id="estadisticas" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color: #fff;">Estadisticas</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="estadisticas">
                        <a href="{{ url('admin/')}}" class="dropdown-item">Genero</a>
                        <a href="{{route('estadistica.facualpss')}}" class="dropdown-item">Autoevaluación</a>
                        <a href="{{route('estadistica.fecualpss')}}" class="dropdown-item">Evaluación</a>
                        <a href="{{route('estadistica.feapsss')}}" class="dropdown-item">Actividades</a>
                    </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fff;">Usuarios<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admin/accesos')}}" style="color: #fff;">Acceso<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        @endif
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown" >
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #fff;"><i class="fa fa-user"></i> {{ Auth::user()->nombres }} {{ Auth::user()->apellido_p }} {{ Auth::user()->apellido_m }}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="{{ route('logout')}}" class="dropdown-item">Salir</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            @if(Auth::user()->admin())
            <li><a href="{{route('alumnos')}}"><i class="fas fa-user-graduate"></i> Alumnos Registrados</a></li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefeige())
            <li>
                <a href="#ige" data-toggle="collapse">
                    <i class="fas fa-briefcase"></i> IGE
                </a>
                <ul id="ige" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexige')}}">Todos</a></li>
                    <li><a href="#igess" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="igess" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexiges5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexiges6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexiges7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexiges8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefeind())
            <li>
                <a href="#ii" data-toggle="collapse">
                    <i class="fas fa-industry"></i> IND
                </a>
                <ul id="ii" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexind')}}">Todos</a></li>
                    <li><a href="#indss" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="indss" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexinds5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexinds6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexinds7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexinds8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefeisc())
            <li>
                <a href="#isc" data-toggle="collapse">
                    <i class="fa fa-laptop"></i> ISC
                </a>
                <ul id="isc" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexisc')}}">Todos</a></li>
                    <li><a href="#iscs" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="iscs" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexiscs5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexiscs6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexiscs7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexiscs8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefela())
            <li>
                <a href="#admon" data-toggle="collapse">
                    <i class="fas fa-building"></i> ADMON
                </a>
                <ul id="admon" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexla')}}">Todos</a></li>
                    <li><a href="#las" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="las" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexlas5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexlas6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexlas7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexlas8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefetsm())
            <li>
                <a href="#tsm" data-toggle="collapse"> 
                    <ion-icon md="md-flashlight" name="flashlight"></ion-icon>TSM
                </a>
                <ul id="tsm" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indextsm')}}">Todos</a></li>
                    <li><a href="#tsms" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="tsms" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indextsms5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indextsms6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indextsms7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indextsms8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefeinfs())
            <li>
                <a href="#inf" data-toggle="collapse">
                    <i class="fas fa-desktop"></i> INF
                </a>
                <ul id="inf" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexinfs')}}">Todos</a></li>
                    <li><a href="#infs" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="infs" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexinfss5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexinfss6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexinfss7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexinfss8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
            @if(Auth::user()->admin() or Auth::user()->jefeiges())
            <li>
                <a href="#iged" data-toggle="collapse">
                    <ion-icon md="md-business" name="business"></ion-icon> IGE-ED
                </a>
                <ul id="iged" class="list-unstyled collapse">
                    <li><a href="{{route('seguimiento.indexiges')}}">Todos</a></li>
                    <li><a href="#igesss" data-toggle="collapse">
                         Semestre
                        </a></li>
                        <ul id="igesss" class="list-unstyled collapse">
                            <li><a href="{{route('seguimiento.indexigess5')}}">Semestre 5</a></li>
                            <li><a href="{{route('seguimiento.indexigess6')}}">Semestre 6</a></li>
                            <li><a href="{{route('seguimiento.indexigess7')}}">Semestre 7</a></li>
                            <li><a href="{{route('seguimiento.indexigess8')}}">Semestre 8</a></li>
                        </ul>
                </ul>
            </li>
            @endif
        </ul>
    </div>