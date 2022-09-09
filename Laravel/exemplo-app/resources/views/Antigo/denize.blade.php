@include('top')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel/CSS</title>
  </head>
  <body>
    <div id="carouselExampleControls" class="carousel slide w-75" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://blog.grupolumis.com.br/wp-content/uploads/2022/01/Morar-em-Florian%C3%B3polis.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://viagemegastronomia.cnnbrasil.com.br/wp-content/uploads/sites/5/2021/10/eduardo-zmievski-IhknpZPSKnw-unsplash.jpg?w=876&h=484&crop=1" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://a.cdn-hotels.com/gdcs/production135/d1565/b5f6c35e-41ae-4d60-9351-a36b2a283c66.jpg?impolicy=fcrop&w=1600&h=1066&q=medium" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.supremoarabica.com.br/wp-content/uploads/2019/04/10-curisoidades-sobre-o-caf%C3%A9-1024x768.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="btn btn-danger carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="btn btn-primary carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@include('footer')