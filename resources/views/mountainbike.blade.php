@extends('template')
@section('content')
                                @foreach($products as $product)
                                <div class="col-sm-6">
                                     <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">TRINX M1100 ELITE 27.5 MTB</h5><a href="trinx.html">
                                            <img src="picturelo/trinx.jpg" alt="" class="img-fluid"></a>
                                            <p>Mountain Bikes</p>
                                            <div class="card-heading">RM1799</div>
                                            <a href="trinx.html">
                                            <button style="float:right" class="btn btn-danger btn-xs">Select for Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Crossmac MV100 24" MTB</h5><a href="crossmac.html"> 
                                            <img src="picturelo/crossmac.jpg" alt="" class="img-fluid"></a>
                                            <p>Mountain Bikes</p>
                                            <div class="card-heading">Rm 799</div>
                                            <a href="crossmac.html">
                                            <button style="float:right" class="btn btn-danger btn-xs">Select for Details</button></a>
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
@endsection