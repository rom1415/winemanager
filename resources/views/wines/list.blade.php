<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wine Manager</title>

        <!-- Bootstrap CDN for rapid prototyping !-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
          <div class="header clearfix">
            <nav>
              <ul class="nav nav-pills float-right">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </nav>
            <h3 class="text-muted">Wine Manager</h3>
          </div>
      <div>
          

      </div>

      <div class="row">

        <div class="col-lg-4">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Wine List</a></li>
            <li class="list-group-item"><a href="#">Suppliers</a></li>
            <li class="list-group-item"><a href="#">Regions</a></li>
          </ul>
        </div>

        <div class="col-lg-8">
          @foreach ($products as $product)
            <p>This is product {{ $product->prodName }}</p>
        @endforeach
        </div>

      </div>



      <footer class="footer">
        <p>KLF Media 2017</p>
      </footer>

    </div>
    </body>
</html>
