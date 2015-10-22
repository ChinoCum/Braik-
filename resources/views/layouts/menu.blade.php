<html>
<head><title>Notas</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
{!!Html::style('assets/css/bootstrap.min.css')!!}
{!!Html::style('assets/css/metisMenu.min.css')!!}
{!!Html::style('assets/css/sb-admin-2.min.css')!!}
{!!Html::style('assets/css/font-awesome.min.css')!!}
{!!Html::style('assets/css/simple-sidebar.css')!!}
</head>
<body>
 	 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Wuppa2
                    </a>
                </li>
                <li>
                    <a href="#">Perfil</a>
                </li>
                <li>
                    <a href="#">Tareas</a>
                </li>
                <li>
                    <a href="#">Contenidos</a>
                </li>
                <li>
                    <a href="#">Notas</a>
                </li>
                <li>
                    <a href="#">Foros</a>
                </li>
                <li>
                    <a href="#">Conducta</a>
                </li>
                <li>
                    <a href="#">Maestros</a>
                </li>
            </ul>
        </div>
        @yield('content')
    </div>
    <!-sidebar-->

{!!Html::script('assets/js/jquery.min.js')!!}
{!!Html::script('assets/js/bootstap.min.js')!!}
{!!Html::script('assets/js/metisMenu.min.js')!!}
{!!Html::script('assets/js/sb-admin-2.min.js')!!}
</body>
</html>