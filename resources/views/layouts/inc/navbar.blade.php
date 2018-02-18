{{--  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Jamie Phan</a>
        </div>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item {!! (Request::url() == url('/')) ? 'active' : '' !!}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {!! (Request::url() == url('/about')) ? 'active' : '' !!}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {!! (Request::url() == url('/projects')) ? 'active' : '' !!}">
                <a class="nav-link" href="/projects">Projects</a>
            </li>
            <li class="nav-item {!! (Request::url() == url('/contact')) ? 'active' : '' !!}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>  --}}

{{--  <nav class="navbar navbar-expand-lg navbar-dark">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item {!! (Request::url() == url('/')) ? 'active' : '' !!}">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/about')) ? 'active' : '' !!}">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/projects')) ? 'active' : '' !!}">
            <a class="nav-link" href="/projects">Projects</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/contact')) ? 'active' : '' !!}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
  </nav>  --}}

  <nav class="navbar  navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {!! (Request::url() == url('/')) ? 'active' : '' !!}">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/about')) ? 'active' : '' !!}">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/projects')) ? 'active' : '' !!}">
            <a class="nav-link" href="/projects">Projects</a>
        </li>
        <li class="nav-item {!! (Request::url() == url('/contact')) ? 'active' : '' !!}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>