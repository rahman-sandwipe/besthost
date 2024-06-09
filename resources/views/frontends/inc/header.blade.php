<div class="header-top">
    <div class="container">
        <div class="header-top-content">
            <div class="header-info-group">
                <a href="#" class="header-info">
                    <i class="fas fa-phone-alt"></i>
                    <span>0209-4215-5596</span>
                </a>
                <a href="#" class="header-info">
                    <i class="fas fa-envelope"></i>
                    <span>info@domhost.com</span>
                </a>
                <a href="#" class="header-info">
                    <i class="fas fa-comments"></i>
                    <span>Live Chatting</span>
                </a>
            </div>
            <div class="header-select-group">
                <div class="header-select">
                    <i class="fas fa-flag"></i>
                    <select class="select">
                        <option value="english" selected>english - USA</option>
                        <option value="bangali">bangali - BD</option>
                        <option value="arabic">arabic - SA</option>
                    </select>
                </div>
                <div class="header-select">
                    <i class="fas fa-globe"></i>
                    <select class="select">
                        <option value="english" selected>doller - $USD</option>
                        <option value="bangali">pound - £GBP</option>
                        <option value="arabic">euro - €EUR</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-part">
    <div class="container">
        <div class="header-nav-content">
            <a href="index.html" class="header-logo">
                <img src="{{ asset('frontends/images/logo-black.png') }}" alt="logo">
            </a>
            <nav class="nav-sidebar">
                <div class="nav-header">
                    <a href="#">
                        <img src="{{ asset('frontends/images/logo-black.png') }}" alt="logo">
                    </a>
                    <button class="nav-close">
                        <i class="flaticon-cancel-1"></i>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a class="navbar-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('searchDomain') }}" class="navbar-link">Domain Search</a>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">hosting</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item">
                                <a href="cloud-hosting.html" class="dropdown-link">cloud hosting</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="shared-hosting.html" class="dropdown-link">shared hosting</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="reseller-hosting.html" class="dropdown-link">reseller hosting</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">pricing plan</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item dropdown">
                                <a href="#" class="dropdown-link">shop</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('blogs') }}" class="navbar-link">Blogs</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('contacts') }}" class="navbar-link">contacts</a></li>
                </ul>
                <div class="nav-footer">
                    <p>&copy; All Rights Reserved by <a href="#">Mironcoder</a></p>
                </div>
            </nav>
            <div class="header-widget-group">
                <div class="header-profile">
                    <a href="#" class="header-user">
                        <img src="{{ asset('frontends/images/user.png') }}" alt="user">
                        <span>join</span><i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="user-dropdown">
                        <li>
                            <a href="{{ route('login') }}"><i class="fas fa-unlock"></i>login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"><i class="fas fa-user-edit"></i>register</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i class="fas fa-question-circle"></i>forgot password</a>
                        </li>
                    </ul>
                </div>
                <div class="header-widget"><a href="cartlist.html" class="header-cart"><i class="flaticon-shopping-bag"></i><sup>0</sup></a><button class="header-menu"><i class="flaticon-align-right"></i></button></div>
            </div>
        </div>
    </div>
</header>