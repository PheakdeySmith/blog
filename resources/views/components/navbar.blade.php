<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
        <!-- <img src="{{ asset('assets') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('front.index') }}" class="nav-item nav-link{{ request()->routeIs('front.index') ? ' active' : '' }}">Home</a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link{{ request()->routeIs('front.about') ? ' active' : '' }}">About</a>
            <a href="{{ route('front.services') }}" class="nav-item nav-link{{ request()->routeIs('front.services') ? ' active' : '' }}">Services</a>
            <a href="{{ route('front.package') }}" class="nav-item nav-link{{ request()->routeIs('front.package') ? ' active' : '' }}">Packages</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('front.destination') }}" class="dropdown-item">Destination</a>
                    <a href="{{ route('front.booking') }}" class="dropdown-item">Booking</a>
                    <a href="{{ route('front.team') }}" class="dropdown-item">Travel Guides</a>
                    <a href="{{ route('front.testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ route('front.404') }}" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
    </div>
</nav>
