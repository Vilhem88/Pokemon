@include('pokemons.head')
@include('css.css')
<body>
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <form action="{{route('pokemons.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label  class="form-label">Title</label>
                              <input type="title" class="form-control @error('title') is-invalid
                              @enderror" name="title" value="{{old('title')}}">
                              @error('title')
                              <div class="text-danger">
                                {{ $message }}
                              </div>    
                              @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('desc') is-invalid
                                @enderror" placeholder="Description here" name="desc" value="{{old('desc')}}">
                                <label for="floatingTextarea">Description</label>
                              </div>
                              @error('desc')
                              <div class="text-danger">
                                {{ $message }}
                              </div>    
                              @enderror
                              <div class="mb-3">
                                <label for="formFile" class="form-label">Image url:</label>
                                <input class="form-control  @error('image') is-invalid @enderror" type="text" name="image" value="{{old('image')}}">
                                @error('image')
                              <div class="text-danger">
                                {{ $message }}
                              </div>
                              @enderror
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
   @include('scripts.script')
</body>

</html>
