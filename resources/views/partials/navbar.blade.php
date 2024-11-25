<div class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
	&nbsp;
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light landing-navbar">
    <div class="container">
        <a class="navbar-brand landing-brand" href="#">
            <img src="{{ asset('appstack/img') }}/af.png" width="48" height="48"/>
        </a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-md-inline-block">
                <a class="nav-link text-lg px-lg-3 {{ Request::is('/') ? 'active' : '' }}" href="/">About</a>
            </li>
            <li class="nav-item d-none d-md-inline-block">
                <a class="nav-link text-lg px-lg-3 {{ Request::is('project') ? 'active' : '' }}" href="/project">Project</a>
            </li>
        </ul>
    </div>
</nav>
