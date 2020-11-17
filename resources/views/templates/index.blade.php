<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/jquery.desoslide.css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
</head>

<body>
<!--Header-->

<header>
    <div class="top-bar_sub_w3layouts container-fluid">
        <div class="row">
            <div class="col-md-4 logo text-left">
                <a class="navbar-brand" href="{{route('index')}}">
                    <i class="fab fa-linode"></i> Weblog</a>
            </div>
            <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
                <span>Welcome Back!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="{{route('login')}}">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
                <span>
						<a href="{{route('register')}}">
							<i class="far fa-user"></i> Register</a>
					</span>
            </div>
            <div class="col-md-4 log-icons text-right">

                <ul class="social_list1 mt-3">

                    <li>
                        <a href="#" class="facebook1 mx-2" >
                            <i class="fab fa-facebook-f"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter2">
                            <i class="fab fa-twitter"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="dribble3 mx-2">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header_top" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="{{route('blog1')}}">Standard Blog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('blog2')}}">2 Column Blog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('blog3')}}">3 Column Blog</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                </ul>
                <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                    <button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>



            </div>
        </nav>

    </div>
</header>
<!--//header-->


@yield('main')


<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>


<!-- //Custom-JavaScript-File-Links -->
<script src="js/bootstrap.js"></script>


</body>

</html>
