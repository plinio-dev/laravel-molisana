<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('main')
    {{-- main section --}}
   <main class="container paste">
      {{-- paste lunghe --}}
      <section class="container-small lunghe">
         <h2>Le lunghe</h2>
         <div class="cards">
            @foreach ($lunghe as $pasta)
               <div class="card">
                  <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
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
                  <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
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
                  <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
               </div>  
            @endforeach 
         </div>
      </section>
      {{-- paste cortissime --}}

   </main>
     {{-- main section --}}

@endsection
   
