<header>
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col d-flex align-items-center">
            <div class="brand-logo"></div>
            </div>
            <div class="col d-flex justify-content-end">
                <nav>
                    <ul class="d-flex ">
                    <li class="nav-item  {{ (request()->segment(1) == '') ? 'current' : '' }}" ><a href="/">Home</a></li>
                    <li class="nav-item {{ (request()->segment(1) == 'about') ? 'current' : '' }}"><a href="/about">About</a></li>
                    <li class="nav-item {{ (request()->segment(1) == 'contact') ? 'current' : '' }}"><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="d-sm-block d-md-none">
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
    
        <nav class="menu">
            <div class="menu-branding d-none">
            <div class="portrait"></div>
            </div>
            <ul class="menu-nav">
                <div class="brand-logo"></div>
            <li class="nav-item {{ (request()->segment(1) == '') ? 'current' : '' }}">
                <a href="/" class="nav-link">
                Home
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'about') ? 'current' : '' }}">
                <a href="/about" class="nav-link">
                About
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'contact') ? 'current' : '' }}">
                <a href="/contact" class="nav-link">
                Contact
                </a>
            </li>
            </ul>
        </nav>
    </div>
    
</header>