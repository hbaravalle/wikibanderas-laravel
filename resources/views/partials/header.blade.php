<header>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/paises">WikiBanderas</a>
            <div>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="/pais/agregar">Crear país</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </nav>
</header>