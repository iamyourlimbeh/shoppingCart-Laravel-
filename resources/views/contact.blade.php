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

  <div class="container-fluid" style="background-color:cornflowerblue;">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">First and last name</span>
                        </div>
                        <input type="text" aria-label="First name" class="form-control">
                        <input type="text" aria-label="Last name" class="form-control">
                    </div>
                    <div class="input-group mb-3" style="margin-top: 15px">
                        <input type="text" class="form-control" placeholder="Your Name" aria-label="Your Name" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@souldrive.com</span>
                        </div>
                    </div>
                    <div class="input-group mb-3" style="margin-top: 10px">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Phone number</span>
                        </div>
                        <input type="text" class="form-control" placeholder="For examples 01X-XXXXXXX" aria-label="For examples 010-XXXXXXX" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3"style="margin-top: 10px">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Reasons</label>
                        </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Please Select</option>
                              <option value="1">Complaint</option>
                              <option value="2">Rating</option>
                              <option value="3">Others comments</option>
                            </select>
                    </div>
                    <div class="input-group" style="margin-top: 10px">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Message</span>
                        </div>
                            <textarea class="form-control" aria-label="Message"></textarea>
                    </div>
                    <button onclick="location.href = 'submit.html';" id="myButton" class="float-right submit-button" >Submit</button>
            </div>
        
            <div class="col-md-6"style="margin-top: 15px; text-align:center">
              <h1>Location</h1>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15952.732916340012!2d103.6244547!3d1.6403892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe27fabf2aa6743dd!2sNSIT+Academy!5e0!3m2!1sen!2smy!4v1564544066082!5m2!1sen!2smy" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid;">
        <div class="card text-center">
            <div class="card-header" style="background-color:lightblue;">
              Christmas Day Promotions
            </div>
            <div class="card-body">
              <h5 class="card-title">Promotions for bicycles sales ! </h5>
              <p class="card-text">Over RM1000 purchase total would have RM100 Discount </p>
              <a href="bootstrap.html" class="btn btn-primary">Shop Now!</a>
            </div>
            <div class="card-footer text-muted" style="background-color:lightblue;">
              Expired in December!
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