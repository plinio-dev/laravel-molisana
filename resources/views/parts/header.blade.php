<header>
   <div class="container pd-tb-35 ">
         <div class="logo">
            <img src="{{ asset ('images/marchio-sito-test.png') }}" alt="immagine-logo">
         </div>
      </div>
      <div class="container">
         <nav>
            <ul>
               <li><a class="font-menu {{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}" href="{{ route('homepage') }}">Home</a></li>
               <li><a class="font-menu {{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : ''}}" href="{{ route('prodotto', ['id' => 0]) }}">Prodotti</a></li>
               <li><a class="font-menu {{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}" href="{{ route('news') }}">News</a></li>
            </ul>
         </nav>
      </div>
   </header>