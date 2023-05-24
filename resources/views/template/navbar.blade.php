<nav class="navbar navbar-expand-lg d-flex flex-column py-0">
    <div class="container-fluid d-flex justify-content-center p-3" style="background-color:orange; font-size:30px; color:white">
        <m-0>Giant Book Supplier<m-0>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link @yield('homeaktif')" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @yield('cataktif')" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu">
                @for($i=1; $i<=6; $i++)
                    <li><a class="dropdown-item" href="{{ route('category-detail', $i) }}">Category {{ $i }}</a></li>
                @endfor
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('pubaktif')" aria-current="page" href="{{ route('publisher') }}">Publisher</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('conaktif')" aria-current="page" href="{{ route('contact') }}">Contact</a>
        </li>
        </ul>
    </div>
</nav>