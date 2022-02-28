@extends('temp.main')

@section('container')
  <div class="album py-5 mt-4">
    <div class="container d-flex justify-content-center">
      <div class="row justify-content-md-center col-10">
        <div class="col-12">
          @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
          @endif
          <form method="post" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
            @csrf
            <h4 style="color: #547794;">Tulis Resepmu ...</h4>
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input name="title" type="text" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
              @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
              <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" value="" id="exampleFormControlTextarea1" rows="3">{{ old('desc') }}</textarea>
              @error('desc')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <h5 style="color: #547794;">Bahan bahan</h5>
              <div id="add-bahan-list">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="ingredient[]" aria-describedby="button-addon2">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="ingredient[]" aria-describedby="button-addon2">
                </div>
              </div>
              <button type="button" id="add-bahan" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                Item Bahan
              </button>
            </div>
            <div class="mb-3">
              <h5 style="color: #547794;">Langkah Pembuatan</h5>
              <div id="add-langkah-list" >
                <div class="input-group mb-3">
                  <input type="text" name="step[]" class="form-control" value="" aria-describedby="button-addon2">
                </div>
                <div class="input-group mb-3">
                  <input type="text" name="step[]" class="form-control" value="" aria-describedby="button-addon2">
                </div>
              </div>
              <button type="button" id="add-langkah" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                Item Langkah
              </button>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Upload Foto Masakan</label>
              <input class="form-control @error('img') is-invalid @enderror" value="{{ old('img') }}" name="img" type="file" id="formFile">
              @error('img')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn d-block" style="background-color: #547794; color: white;">Terbitkan Resep</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection