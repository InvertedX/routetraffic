<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{asset('invertedx/traffic/css/style.css')}}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/contact') }}">
                    Route Traffic
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>


            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Routes</div>
                    <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table  table-hover table-bordered ">
                            <thead>
                            <tr>
                                <th>HTTP Methods</th>
                                <th>Path</th>
                                <th>Route Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($routes as $route)
                                <tr>
                                    <td scope="row">
                                        <b>
                                            @foreach($route->getMethods() as $key=>$method)
                                                @if($key!=0)  OR   @endif
                                                {{$method}}
                                            @endforeach
                                        </b>
                                    </td>
                                    <td>{{$route->getPath()}}</td>
                                    <td>{{$route->getName()}}</td>
                                    <td width="10%">{{$route->getActionName()}}</td>
                                    {{--<td>{{$route->getActionName()}}</td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{asset('invertedx/traffic/js/app.js')}}"></script>
</body>
</html>
