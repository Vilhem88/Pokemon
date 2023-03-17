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
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm p-2 text-center">
                            <h2 class="p-5">{{$pokemon['title']}}</h2>
                                <img src="{{$pokemon['image']}}" alt="">
                            <div class="card-body">
                                <p class="card-text">{{$pokemon['desc']}}</p>
                                <div class="d-flex justify-content-center p-3">
                                        <a href="{{URL::to('/')}}" class="btn btn-md btn-warning" style="margin-right: 45px;">Home</a>
                                       
                                        <button type="button" class="btn btn-danger btn-md">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
    @include('scripts.script')


</body>

</html>
