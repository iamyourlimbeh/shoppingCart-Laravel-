<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Main page products</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-olive">
        <img src="picturelo/logo.png" class="img-fluid rounded-circle" alt="" height="110px" width="110px">
        <a class="navbar-brand" href="{{ url('main') }}" style="padding-left:10px">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('Productmainpages') }}">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bike Accessories 
              </a>
              <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('bikeaccess') }}">More...</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }}">
          {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>        
    
    <div class="container-fluid" style="margin-top:10px ; background-color:cornflowerblue;">
                    <div class="col-md-1"></div>
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <div class=" w3-animate-zoom">
                            <div class="card border-0">
                                <div class="jumbotron">
                                        <h1 class="display-4">Bicycles Shop SoulDrive</h1>
                                        <p class="lead">Various of the accessories could choose by you!</p>
                                        <hr class="my-4">
                                        <p>New release Accessories!</p>
                                </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h5 class="card-title">Cycling Gloves</h5><a href="{{ url('viewlist') }}">
                                                    <img src="picturelo/gloves.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h5 class="card-title">Cycling Shoes</h5><a href="{{ url('viewlist') }}"> 
                                                    <img src="picturelo/shoes.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-sm-3">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bicycle Pumps</h5><a href="{{ url('viewlist') }}">
                                                    <img src="picturelo/pumps.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-sm-3">
                                          <div class="card h-100">
                                              <div class="card-body">
                                                  <h5 class="card-title">More...</h5><a href="{{ url('viewlist') }}">
                                                  <img src="picturelo/more.jpg" alt="" class="img-fluid"></a>
                                              </div>
                                          </div>
                                      </div>   
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 bg-warning">
                            NSIT Academy <br>
                            No.16, Jalan Sri Putra 1, <br>
                            Bandar Putra, <br>
                            81000 Kulai , Johor <br>
                            607-6600628 <br>
                        </div>
                    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>