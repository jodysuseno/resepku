<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Resepku</title>

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top p-0" style="background-color: #547794;"
    data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand fs-3" href="{{ route('index') }}">Resepku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav  ms-auto">
          <a class="nav-link active" href="{{ route('recipe.create') }}">Tulis Resep</a>
          <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  @yield('container')

  <footer id="sticky-footer" style="background-color: rgb(192, 192, 192);" class="flex-shrink-0 py-3 text-black">
    <div class="container text-center">
      <small>Made by Jody Ririt Krido Suseno</small>
    </div>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

<script>
  $(document).ready(function () {
    var nextformBahan = 0;
    $(document).on('click', '#add-bahan', function () {
      nextformBahan++;
      var html = '';
      html += '<div class="input-group mb-3" id="input-bahan-'+nextformBahan+'">';
      html += '<input type="text" name="ingredient[]" class="form-control" aria-describedby="button-addon2">';
      html += '<button class="btn btn-outline-secondary btn-bahan" type="button" id="'+nextformBahan+'">';
      html += '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">';
      html += '<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0z" />';
      html += '<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0z" />';
      html += '</svg>';
      html += '</button>';
      html += '</div>';
      $('#add-bahan-list').append(html);

    });

    $(document).on('click', '.btn-bahan', function () {
      var button_id = $(this).attr("id");
      $('#input-bahan-' + button_id + '').remove();
    });

    var nextformLangkah = 0;
    $(document).on('click', '#add-langkah', function () {
      nextformLangkah++;
      var html = '';
      html += '<div class="input-group mb-3" id="input-langkah-'+nextformLangkah+'">';
      html += '<input type="text" name="step[]" class="form-control" aria-describedby="button-addon2">';
      html += '<button class="btn btn-outline-secondary btn-langkah" type="button" id="'+nextformLangkah+'">';
      html += '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">';
      html += '<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0z" />';
      html += '<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0z" />';
      html += '</svg>';
      html += '</button>';
      html += '</div>';
      $('#add-langkah-list').append(html);

    });

    $(document).on('click', '.btn-langkah', function () {
      var button_id = $(this).attr("id");
      $('#input-langkah-' + button_id + '').remove();
    });
  });
</script>

</html>