<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wuppa2</title>

        {!!Html::style('assets/css/bootstrap.min.css')!!}
        {!!Html::style('assets/css/metisMenu.min.css')!!}
        {!!Html::style('assets/css/sb-admin-2.min.css')!!}
        {!!Html::style('assets/css/font-awesome.min.css')!!}
        {!!Html::style('assets/css/simple-sidebar.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

{!!Html::script('assets/js/jquery.min.js')!!}
{!!Html::script('assets/js/bootstap.min.js')!!}
{!!Html::script('assets/js/metisMenu.min.js')!!}
{!!Html::script('assets/js/sb-admin-2.min.js')!!}

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
