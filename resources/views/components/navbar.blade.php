<header class="header">
    <div class="logo-area">
        <i class="fas fa-phoenix-framework phoenix-icon"></i>
        <div class="logo-text">PHOENIX <span>Academy</span></div>
    </div>

    <div class="nav-menu">
        <div class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('lessons.index') }}" class="{{ request()->routeIs('lessons.*') ? 'active' : '' }}">Lessons</a>
            <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
        
        <div class="nav-actions">
            {{-- Language Switcher --}}
            <x-language-switcher />
            
            {{-- Auth Buttons --}}
            @auth
                <div class="user-menu">
                    <button class="user-menu-button" onclick="toggleUserMenu()">
                        <i class="fas fa-user-circle"></i>
                        <span>{{ Auth::user()->name }}</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="user-dropdown" id="userDropdown">
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</a>
                        @elseif(Auth::user()->role === 'teacher')
                            <a href="{{ route('teacher.dashboard') }}"><i class="fas fa-chalkboard-teacher"></i> Teacher Dashboard</a>
                        @else
                            <a href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        @endif
                        <a href="{{ route('dashboard.profile') }}"><i class="fas fa-user"></i> Profile</a>
                        <a href="{{ route('dashboard.my-lessons') }}"><i class="fas fa-book"></i> My Lessons</a>
                        <a href="{{ route('dashboard.bookings') }}"><i class="fas fa-calendar"></i> My Bookings</a>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> Log In
                </a>
                <a href="{{ route('register') }}" class="register-btn">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
            @endauth
        </div>
    </div>
</header>

<style>
    /* ===== HEADER & NAVIGATION ===== */
    .header {
        background-color: #ffffff;
        box-shadow: 0 4px 20px rgba(0, 40, 20, 0.04);
        padding: 0.8rem 2rem;
        position: sticky;
        top: 0;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .logo-area {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .phoenix-icon {
        font-size: 2.2rem;
        color: #d44a2c;
    }

    .logo-text {
        font-size: 1.6rem;
        font-weight: 700;
        letter-spacing: -0.5px;
        background: linear-gradient(145deg, #1f5e4b, #2b4b3a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .logo-text span {
        font-weight: 300;
        color: #b3572c;
        background: none;
        -webkit-text-fill-color: #b3572c;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .nav-links {
        display: flex;
        gap: 1.8rem;
        font-weight: 500;
    }

    .nav-links a {
        text-decoration: none;
        color: #1e3b33;
        font-size: 1.1rem;
        transition: 0.2s;
        border-bottom: 2px solid transparent;
        padding-bottom: 4px;
    }

    .nav-links a:hover,
    .nav-links a.active {
        border-bottom-color: #d97c4a;
        color: #b34d2a;
    }

    .nav-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    /* ===== AUTH BUTTONS ===== */
    .login-btn {
        background-color: #1b5e44;
        color: white;
        padding: 0.7rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 6px 12px rgba(20, 80, 50, 0.2);
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .login-btn:hover {
        background-color: #b6552e;
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(20, 80, 50, 0.3);
        color: white;
    }

    .register-btn {
        background-color: #d97c4a;
        color: white;
        padding: 0.7rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 6px 12px rgba(217, 124, 74, 0.2);
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .register-btn:hover {
        background-color: #b6552e;
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(217, 124, 74, 0.3);
        color: white;
    }

    /* ===== USER MENU ===== */
    .user-menu {
        position: relative;
    }

    .user-menu-button {
        background-color: #1b5e44;
        color: white;
        padding: 0.7rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 1.1rem;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 6px 12px rgba(20, 80, 50, 0.2);
        transition: 0.2s;
    }

    .user-menu-button:hover {
        background-color: #b6552e;
        transform: scale(1.02);
    }

    .user-menu-button i {
        color: white;
        font-size: 1.2rem;
    }

    .user-dropdown {
        position: absolute;
        top: 120%;
        right: 0;
        background: white;
        border-radius: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        min-width: 240px;
        padding: 0.8rem 0;
        display: none;
        z-index: 100;
        border: 1px solid #e6d9cb;
    }

    .user-dropdown.show {
        display: block;
    }

    .user-dropdown a,
    .user-dropdown button {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 0.8rem 1.8rem;
        color: #1e3b33;
        text-decoration: none;
        transition: 0.2s;
        font-size: 0.95rem;
        width: 100%;
        text-align: left;
        background: none;
        border: none;
        cursor: pointer;
    }

    .user-dropdown a:hover,
    .user-dropdown button:hover {
        background: #f8f2ea;
        color: #d97c4a;
    }

    .user-dropdown hr {
        margin: 0.5rem 1rem;
        border: none;
        border-top: 1px solid #eee;
    }

    .user-dropdown button {
        color: #dc3545;
    }

    /* ===== RTL SUPPORT ===== */
    [dir="rtl"] .user-dropdown {
        right: auto;
        left: 0;
    }

    [dir="rtl"] .user-dropdown a,
    [dir="rtl"] .user-dropdown button {
        text-align: right;
    }

    [dir="rtl"] .user-dropdown a i,
    [dir="rtl"] .user-dropdown button i {
        margin-left: 10px;
        margin-right: 0;
    }

    [dir="rtl"] .nav-links {
        margin-right: 0;
        margin-left: auto;
    }

    /* ===== MOBILE RESPONSIVE ===== */
    @media (max-width: 900px) {
        .header {
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }

        .nav-menu {
            flex-direction: column;
            width: 100%;
            gap: 1rem;
        }

        .nav-links {
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .nav-actions {
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .login-btn,
        .register-btn,
        .user-menu-button {
            width: 100%;
            justify-content: center;
        }

        .user-menu {
            width: 100%;
        }

        .user-dropdown {
            width: 100%;
        }
    }
</style>

<script>
    function toggleUserMenu() {
        document.getElementById('userDropdown')?.classList.toggle('show');
    }

    // Close dropdown when clicking outside
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('click', function(event) {
            if (!event.target.closest('.user-menu')) {
                document.getElementById('userDropdown')?.classList.remove('show');
            }
        });
    });
</script>