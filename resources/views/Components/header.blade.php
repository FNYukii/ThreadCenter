<header>
    <div class="large-container">
        <a href="/" class="logo">Thread Center</a>

        <ul>
            @auth
            <li>
                <a href="{{ route('accountPage') }}">Account</a>
            </li>
            
            @else
            <li>
                <a href="{{ route('login') }}">Log in</a>
            </li>

            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
            @endauth
        </ul>
    </div>
</header>