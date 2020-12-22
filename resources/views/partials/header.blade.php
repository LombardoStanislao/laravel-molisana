<header>

    <div class="logo">
        <img src="{{ asset('images/marchio-sito-test.png')}}" alt="La Molisana | Logo">

    </div>

    <div class="menu">
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('prodotti')}}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a href="{{ route('news')}}">
                        News
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</header>
