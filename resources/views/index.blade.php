@extends('temp.main')

@section('container')

<div class="album py-5 mt-4">
  <div class="container d-flex justify-content-center">
    <div class="row justify-content-md-center col-10">
      <div class="col-12">
        <h4>Resep terbaru</h4>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">
          @foreach ($recipes as $recipe)
            <div class="col">
              <div class="card border-0 rounded-0">
                <a href="{{ route('recipe.show',$recipe->id) }}">
                  <img class="bd-placeholder-img card-img-top rounded-0"
                    src="{{ asset('assets/img/'.$recipe->img) }}"
                    width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" class="card-img-top" alt="{{ $recipe->title }}">
                </a>
                <div class="card-body p-0">
                  <p class="fs-8">
                    @if ($recipe->like->count() == 0)
                      Belum ada yang menyukai ini
                    @else
                      {{ $recipe->like->count() }} orang menyukai ini
                    @endif
                  </p>
                  <h4 class="card-title" style="color: #547794;;">{{ $recipe->title }}</h5>
                    <p class="card-text fs-6 text-justify" >{{ substr($recipe->desc,0,100) }}...</p>
                    <form action="{{ route('like', $recipe->id) }}" method="post">
                      @csrf
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-secondary d-block " style="border-radius: 10px; border: rgb(192, 192, 192); background-color: rgb(192, 192, 192);color: black;">
                        @if ($recipe->like->where('user_id', auth()->user()->id)->count() == null)
                          Suka
                        @else
                          Tidak Suka
                        @endif
                        </button>
                      </div>
                    </form>                    
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection