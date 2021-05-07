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
   <header>
      <div class="container">
         <div class="logo">
            <img src="{{ asset ('images/marchio-sito-test.png') }}" alt="immagine-logo">
         </div>
      </div>
      <div class="container">
         <nav>
            <ul>
               <li><a class="menu-font active" href="">Home</a></li>
               <li><a class="menu-font" href="">Prodotti</a></li>
               <li><a class="menu-font" href="">News</a></li>
            </ul>
         </nav>
      </div>
   </header>
   <main class="container">
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
      <section class="container-small corte">
         <h2>Le corte</h2>
         
      </section>
      <section class="container-small cortissime">
         <h2>Le cortissime</h2>
      </section>
   </main>
</body>
</html>