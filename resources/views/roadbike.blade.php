@extends('template')
@section('content')
                                @foreach($products as $product)
                                <div class="col-sm-6">
                                     <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">TREK ÉMONDA SL 6 DISC</h5><a href="detail.html">
                                            <img src="picturelo/trekemonda.jpg" alt="" class="img-fluid"></a>
                                            <p>Road Bikes</p>
                                            <div class="card-heading">RM12,699.00</div>
                                            <a href="detail.html">
                                            <button style="float:right" class="btn btn-danger btn-xs">Select for Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">TREK MADONE SLR FRAMESET (PROJECT ONE VERSION)</h5><a href="detail1.html"> <!-- 3 for 4 item in 1 row-->
                                            <img src="picturelo/trekmadone.jpg" alt="" class="img-fluid"></a>
                                            <p>Road Bikes</p>
                                            <div class="card-heading">RM23,699.00</div>
                                            <a href="detail1.html">
                                            <button style="float:right" class="btn btn-danger btn-xs">Select for Details</button></a>
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
@endsection