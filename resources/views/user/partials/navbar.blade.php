<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="template_web/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="{{ Request::is('/') ? "nav-item active" : "nav-item" }}"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="{{ Request::is('about') ? "nav-item active" : "nav-item" }}"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                    <li class="{{ Request::is('course') ? "nav-item active" : "nav-item" }}"><a class="nav-link" href="{{route('course')}}">Course </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">Blog </a>
                            <a class="dropdown-item" href="blog-single.html">Blog single </a>
                        </div>
                    </li>
                    <li class="{{ Request::is('teachers') ? "nav-item active" : "nav-item" }}"><a class="nav-link" href="{{route('teacher')}}">Teachers</a></li>
                    <li class="{{ Request::is('contact') ? "nav-item active" : "nav-item" }}"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    <form method="GET" action="{{route('search')}}">
                        <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info">Search</button>
                        </div>
                    </form>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->