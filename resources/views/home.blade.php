@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <body onload="move()">
                    <div class="col-md-10">
                      <div id="myBar" class="w3-yellow w3-center w3-padding-large" style="width:20%">0%</div>
                    </div>
                    <script>
                            function move() {
                              var elem = document.getElementById("myBar");   
                              var width = 0;
                              var id = setInterval(frame, 50);
                              function frame() {
                                if (width >= 100) {
                                  clearInterval(id);
                                  window.location.replace("{{ url('main') }}");
                                } else {
                                  width++; 
                                  elem.style.width = width + '%'; 
                                  elem.innerHTML = width * 1  + '%';
                                }
                              }
                            }
                    </script>
            </div>
        </div>
    </div>
</div>
@endsection
