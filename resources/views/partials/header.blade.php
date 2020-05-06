<header>
    <img src="{{asset('img/logo.png')}}" alt="La Molisana">
    <nav>
        <ul>
            <li class="{{(url()->current() == route('home')) ? 'active' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            
            <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">
                <a href="{{route('prodotti')}}">Prodotti</a>
            </li>
            <li class="{{(url()->current() == route('news')) ? 'active' : ''}}">
                <a href="{{route('news')}}">News</a>
            </li>
        </ul>
    </nav>
</header>
