<header>
    <div class="nav">
        <div class="title">
            <a href="{{ route('index') }}" class="logo">Sarpras</a>
        </div>
        <div class="navigation">
            <ul class="navbar">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('peminjaman.create') }}">Peminjaman</a></li>
            </ul>
            <div class="main">
                <a href="{{ route('login') }}">{{ Auth::user() ? 'Dashboard' : 'Sign In' }}</a>
            </div>
        </div>
        <div class="left-nav">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </div>
</header>