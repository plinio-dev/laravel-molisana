<header>
   <div class="container pd-tb-35 ">
         <div class="logo">
            <img src="{{ asset ('images/marchio-sito-test.png') }}" alt="immagine-logo">
         </div>
      </div>
      <div class="container">
         <nav>
            <ul>
               <li><a class="font-menu active" href="{{ route('homepage') }}">Home</a></li>
               <li><a class="font-menu " href="">Prodotti</a></li>
               <li><a class="font-menu" href={{ route('news') }}>News</a></li>
            </ul>
         </nav>
      </div>
   </header>