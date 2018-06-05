<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

    <title>AL Zahra PIMS</title>
</head>
<body>
    
    <nav class="navbar navbar-custom" role="navigation">
       <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">  
                <span class="visible-lg visible-md"> AL Zahraa Patient Information Management System</span>
                <span class="visible-xs visible-sm"> AL Zahraa PIMS</span>
            </a>
        </div>
    
        <div class="collapse navbar-collapse main-nav">  
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{URL('help')}}">
                        <i class="fa fa-question"></i>&nbsp;
                        Help
                    </a>
                </li>
                <li>
                    <a href="{{URL('login')}}">
                        <i class="fa fa-sign-in"></i>&nbsp;
                        Login
                    </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
    </nav>
    



    <script src="{{URL::asset('assets/js/jquery-2.1.3.min.js')}}" ></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}" ></script>
</body>
</html>