@extends('temp.main')

@section('container')
<div class="album py-5 mt-4">
  <div class="container d-flex justify-content-center">
    <div class="row justify-content-md-center col-10">
      <div class="col-12 ">
        <img width="100%" height="60%" src="{{ asset('assets/img/'.$recipes->img) }}" class="img-fluid mt-5" alt="...">
        <h1 class="mt-4" >{{ $recipes->title }}</h1>
        <p class="fs-5">{{ $recipes->desc }}</p>

        <h3>Bahan - bahan</h3>
        <p class="fs-5">
          @foreach ($ingredienes as $ingrediene)
            {{ $ingrediene->name }} <br>
          @endforeach
        </p>
        <h3>Langkah Pembuatan</h3>
        <ol class="fs-5">
          @foreach ($steps as $step)
            <li>{{ $step->name }}</li>
          @endforeach
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection