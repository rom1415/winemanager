<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wine Manager</title>

        <!-- Bootstrap CDN for rapid prototyping !-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
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
            <a href="{{ url('/') }}"><h3 class="text-muted">Wine Manager</h3></a>
          </div>
      <div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <ul class="list-group">
            <a href="{{ url('wines') }}"><li class="list-group-item active" >Wines list</li></a>
            <li class="list-group-item"><a href="#">Suppliers</a></li>
            <li class="list-group-item"><a href="#">Regions</a></li>
            <a type="button" class="btn btn-primary" href="{{ url('wines/create') }}">Add a new wine</a>
          </ul>
        </div>

        <div class="col-lg-8">

      <div class="list-group"> 
        @foreach ($products as $product)
          <a href="{{ url('wines', $product->prodID) }} " class="list-group-item"> 
          <h4 class="list-group-item-heading">{{ $product->prodName }}</h4> 
          <p class="list-group-item-text">{{ $product->prodName }} for a price of <strong>${{ $product->prodPriceBuy }}</strong></p> </a> 
        @endforeach
      </div>

      </div>

      <footer class="footer">
        <p>KLF Media 2017</p>
      </footer>

    </div>
    </body>
</html>
