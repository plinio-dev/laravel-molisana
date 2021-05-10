<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>La Molisana</title>
   <!-- google font -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">    
   <!-- foglio di stile -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @include('parts.header')
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
   @include('parts.footer')
</body>
</html>