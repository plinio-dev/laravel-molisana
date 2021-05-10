
@extends('layouts.main')

@section('titoloPagina')
   La Molisana
@endsection

@section('main')
    {{-- main section --}}
   <main class="container paste">
      {{-- paste lunghe --}}
      <section class="container-small lunghe">
         <h2>Le lunghe</h2>
         <div class="cards">
            @foreach ($lunghe as $pasta)
               <div class="card">
                 <a href="{{ route('prodotto', ['id' => $pasta['id'] ])}} "><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a> 
               </div>  
            @endforeach 
         </div>
      </section>
      {{-- paste lunghe --}}
      {{-- paste corte --}}
      <section class="container-small corte">
         <h2>Le corte</h2>
         <div class="cards">
            @foreach ($corte as $pasta)
               <div class="card">
                  <a href="{{ route('prodotto', ['id' => $pasta['id'] ])}} "><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
               </div>  
            @endforeach 
         </div>
      </section>
      {{-- paste corte --}}
      {{-- paste cortissime --}}
      <section class="container-small cortissime">
         <h2>Le cortissime</h2>
         <div class="cards">
            @foreach ($cortissime as $pasta)
               <div class="card">
                  <a href="{{ route('prodotto', ['id' => $pasta['id'] ])}} "><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
               </div>  
            @endforeach 
         </div>
      </section>
      {{-- paste cortissime --}}

   </main>
     {{-- main section --}}

@endsection
   
