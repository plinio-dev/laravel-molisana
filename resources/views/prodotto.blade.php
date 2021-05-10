
@extends('layouts.main')

@section('titoloPagina')
   I nostri Prodotti
@endsection


@section('main')
<div class="container bg-c">
   <div class="container-small">
      <div class="product">
         <h1>{{$pasta['titolo']}}</h1>
         <img src="{{$pasta['src-h']}}" alt="">
         <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
         <p>
            {{!!$pasta['descrizione']!!}}
         </p>
      </div>
   </div>
</div>
@endsection
   

