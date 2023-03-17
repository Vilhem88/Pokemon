@include('pokemons.head')
@include('css.css')

<body>
    <header>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Pokemons</h1>
                </div>
            </div>
        </section>
    </header>
    <main>
        <div class="album py-5 bg-light">
            @if (!empty(Session::get('pokemons')))
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach (Session::get('pokemons') as $key => $pokemon)
                        <?php $pokemon = end($pokemon)?>
                        <div class="col">
                            <div class="card shadow-sm p-2 text-center">
                                <h2 class="p-5">{{ $pokemon['title'] }}</h2>
                                <img src="{{ $pokemon['image'] }}" alt="">
                                <div class="card-body">
                                </div>
                                <button type="button" class="btn btn-md btn-primary" style="margin: auto;"> <a href="{{ URL::to('pokemons') }}/{{ $pokemon['title'] }}" class="text-decoration-none text-white">Open me</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class=" py-5 text-center container">
                <div class="row py-lg-5 ">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <p>
                            <a href="{{ route('pokemons.create') }}" class="btn btn-primary my-2">Add more Pokemons</a>
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class=" py-5 text-center container">
                <div class="row py-lg-5 ">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <p>
                            <a href="{{ route('pokemons.create') }}" class="btn btn-primary my-2">Create a new Pokemon</a>
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        </div>

    </main>
    @include('scripts.script')
</body>

</html>
