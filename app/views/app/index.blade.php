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
    <script src="app/lib/angular/angular-animate.min.js" type="application/javascript"></script>
    <script src="app/lib/angularstrap/angular-strap.min.js" type="application/javascript"></script>
    <script src="app/lib/angularstrap/angular-strap.tpl.min.js" type="application/javascript"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/common.js"></script>
    <script src="app/js/shoplist.js"></script>
    <script src="app/js/receipt.js"></script>

</head>

<body>
<div class="container">
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation" ng-controller="CNav" bs-navbar>
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ Config::get('pieko.app.name') }}</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li data-match-route="/shoplist"><a href="/shoplist">{{ trans('common.nav.shoplist') }}</a></li>
                    <li data-match-route="/receipt"><a href="/receipt">{{ trans('common.nav.receipt') }}</a></li>
                    <li data-match-route="/todo"><a href="/todo">{{ trans('common.nav.todo') }}</a></li>
                    <li class="dropdown">
                        <a href="#" bs-dropdown="dropdown" data-animation="am-flip-x">Drop da bass <b class="caret"></b></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a>v{{ Config::get('pieko.app.version') }}</a></li>
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
