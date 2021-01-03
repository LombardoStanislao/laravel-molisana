<header>

    <div class="logo">
        <img src="{{ asset('images/marchio-sito-test.png')}}" alt="La Molisana | Logo">

    </div>

    <div class="menu">
        <nav>
            <ul>
                <li>
                    <a class="{{ Request::route()->getName() == 'homepage' ? 'active' : '' }}"
                       href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="{{ Request::route()->getName() == 'prodotti' ? 'active' : '' }}"
                       href="{{ route('prodotti')}}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a class="{{ Request::route()->getName() == 'news' ? 'active' : '' }}"
                       href="{{ route('news')}}">
                        News
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</header>
