<!DOCTYPE html>
<html lang="en" ng-app="pieko">
<head>
    <!-- META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ngPieko</title>

    <!-- CSS -->
    <link href="app/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/css/site.css" rel="stylesheet">

    <!-- JS -->
    <script src="app/lib/angular/angular.min.js" type="application/javascript"></script>
    <script src="app/lib/angular/angular-route.min.js" type="application/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="app/lib/bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/common.js"></script>
    <script src="app/js/shoplist.js"></script>
    <script src="app/js/payment.js"></script>

</head>

<body>
<div class="container">
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation" ng-controller="CNav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">[[ name ]]</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#/shoplist">Shoplist</a></li>
                    <li><a href="#/payment">Betalen</a></li>
                    <li><a href="#/todo">Todo</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="./">Frikandel</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </div>

    <div class="content well well-sm" ng-view>

    </div>
</div>
</body>
</html>
