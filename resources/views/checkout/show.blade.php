@extends('layouts.app')

@section('content')
@if (empty($cart))
<span class="d-block p-2 bg-dark text-white text-center">  <h2> Uw winkelmandje is leeg, nozem</h2></span>

@else    
    <div class="container-sm">
        <div class="row">
            <div class="card">
                <div class="card-header"> Welkom {{ $user->first_name }} <br> U heeft {{ count((array) session('cart')) }} verschillende producten in uw winkelmandje </div>
                <div class="row">
                    <div class="col-6">
                        @include('partials.form')
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <div class="card-title">Uw producten</div>
                            <div class="row">
                                <div class="col-4">Product</div>
                                <div class="col-4">Hoeveelheid</div>
                                <div class="col-4">Prijs</div>
                                @foreach ($cart as $product => $quantity)
                                    <div class="col-4"> {{ $product }} </div>
                                    <div class="col-4"> {{ $quantity }}</div>
                                    <div class="col-4"> Prijs </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">Uw totaalprijs: <br> &euro;{{ $total_cost["total"] }}</div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Plaats uw bestelling!</button>
                      </div>                  
                </div>
            </div>
        </div>
    </div>
@endif
@endsection