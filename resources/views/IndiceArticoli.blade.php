<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
  <body>

  <nav class="navbar navbar-expand-lg bg-dark position-fixed top-0  w-100">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/homepage">BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('listArticles')}}">Articoli</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-12 text-center text-white my-5">
      <h2>Tutti gli articoli</h2>
    </div>


    @foreach ($articoli as $articolo)

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
        <div class="card bg-dark text-white h-100">
          <a href="" target="_blank" rel="noopener noreferrer">
            <img src="{{$articolo['img']}}" class="card-img-top" alt="famiglia al cinema">
          </a>
          <div class="card-body">
            <h5 class="card-title">{{$articolo['titolo']}}</h5>
            <p class="card-text">{{$articolo['descrizione']}}</p>
            <a href="{{route('articleDetail',['id'=>$articolo['id']])}}" class="btn btn-danger">Scopri di più</a>
          </div>
        </div>
      </div>
    @endforeach

</div>

</section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>