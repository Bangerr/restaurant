<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Electrolize&family=Kode+Mono:wght@400..700&family=Slackside+One&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/44b694a7ec.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="index">

    <!-- Navbar mobile-->
    <div class="navbar-mobile">
        <div class="site-logo-mobile" role="heading" aria-level="1">
            <a class="text-logo-mobile" href="/">ROMAN'S</a>
        </div>
        <input id="toggle" type="checkbox"></input>

        <label for="toggle" class="hamburger">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
        </label>

        <div class="nav">
            <div class="nav-wrapper">
                <nav>
                    <a href="#">HOME</a><br>
                    <a href="#">ABOUT</a><br>
                    <a href="#">WORK</a><br>
                    <a href="#">SERVICES</a>
                </nav>
            </div>
        </div>

        <div class="restaurant-description-mobile">
            <p><strong>Welcome to ROMAN'S</strong></p>
            <p>the girl & the fig is located in the beautiful Sonoma Plaza and features a wonderful antique bar with
                French aperitifs, unique and traditional cocktails, an award-winning Rhône-Alone wine list, a seasonal
                menu, cheese & charcuterie platters, outdoor garden patio seating & outdoor parklet seating.</p>
        </div>
    </div>

    <!--Navbar desktop-->
    <div class="navbar-desktop site-header">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/About">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/openingHours.html">Opening Hours</a>
            </li>

        </ul>
        <div class="site-logo" role="heading" aria-level="1">
            <a class="text-logo-desktop" href="/">ROMAN'S</a>
        </div>
    </div>

    <main class="page">
        <section id="landing" class="section" data-router="segment" data-router-uri="/menu/" data-router-title="Menu">
        </section>

        <section class="tabs">
            <div class="tabs-nav">
                <ul class="flex justify-between items-center m-auto w-1/2 " role="tablist">
                    <li class="" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="true"
                            data-router-uri="/menus/#/dinner">Dinner</button>
                    </li>
                    <li class="" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="false"
                            data-router-uri="/menus/#/lunch">Lunch</button>
                    </li>
                    <li class="" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="false"
                            data-router-uri="/menus/#/wine-by-the-bottle">Wine</button>
                    </li>
                </ul>
                <div class="menu">
                    <!--starter-->
                    <div class="starter section-list">
                        <h2 class="section-title">Starter</h2>
                        <ul class="starter-list menu-list-item">
                            <div>
                                <p>wtf</p>
                                @if (isset($dishes)){
                                    @foreach ($dishes as $dish)
                                        <x-dish.index $dish="$dish" />
                                        <h2 class="dish-name">{{ $dish->title }}</h2>
                                        <p class="description">{{ $dish->description }}</p>
                                        <img src="{{ $dish->image_path }}" alt="{{ $dish->title }}">
                                        <p>{{ $dish->instructions }}</p>
                                    @endforeach
                                    }
                                @else
                                    <p>Nothing found bitch</p>
                                @endif
                            </div>



                            <li class="dish-name">Veg. Samosa<p class="description">Leggendaria pietanza da strada con
                                    una tradizione secolare, caratterizzata da una croccante pasta triangolare ripiena
                                    di patate speziate e piselli</p>
                            </li>
                            <li class="dish-name">Aloo Tikki<p class="description">Una morbida palla di patate speziate,
                                    appiattita e fritta a puntino</p>
                            </li>
                            <li class="dish-name">Mixed Vegetable Pakora<p class="description">Verdure di stagione
                                    passate nella farina di ceci e fritte fino a diventare croccanti</p>
                            </li>
                            <li class="dish-name">Paneer Pakora<p class="description">Formaggio paneer fresco avvolto in
                                    una pastella piccante di farina di ceci e fritto</p>
                            </li>
                            <li class="dish-name">Mixed Veg<p class="description">Una selezione di Samosa vegetariano,
                                    Pakora di verdure miste e Aloo Tikki</p>
                            </li>
                            <li class="dish-name">Mixed Non-Veg.<p class="description">Una combinazione di Pakora di
                                    pesce, Seekh Kebab di pollo e Pakora di pollo</p>
                            </li>
                        </ul>
                    </div>
                    <!--Tandoori Specials-->
                    <div class="Tandoori-Specials section-list">
                        <h2 class="section-title">Tandoori Specials</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Chicken Seekh Kebab<p class="description">Spiedini di pollo,
                                    grigliati o preparati in forno tandoori. Un piatto tradizionale pakistano</p>
                            </li>
                            <li class="dish-name">Chicken Tikka<p class="description">Teneri pezzi di petto di pollo
                                    marinati nello yogurt e spezie</p>
                            </li>
                            <li class="dish-name">Fish Tikka<p class="description">Freschi pezzi di salmone, marinati
                                    nello yogurt, miele, zafferano, zenzero e una miscela di spezie</p>
                            </li>
                            <li class="dish-name">Malai Tikka<p class="description">Pezzi di pollo marinati nello
                                    yogurt e crema leggermente speziata</p>
                            </li>
                            <li class="dish-name">Haryali Mint Tikka<p class="description">Pezzi di pollo su spiedini,
                                    marinati nella menta e spezie, preparati nel forno tandoori</p>
                            </li>
                            <li class="dish-name">Tandoori Chicken<p class="description">Classiche cosce di pollo
                                    indiane, marinate per 24 ore nello yogurt e spezie</p>
                            </li>
                            <li class="dish-name">Lamb Seekh Kebab<p class="description">Spiedini di agnello,
                                    grigliati o preparati nel forno tandoori. Un piatto tradizionale pakistano</p>
                            </li>
                        </ul>
                    </div>
                    <!--Main course-->
                    <div class="main-course section-list">
                        <h2 class="section-title">Main course (Served with Rice)</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Butter Chicken<p class="description">Pezzi di pollo cotti nel
                                    tandoor e poi preparati in una salsa speciale al burro e spezie</p>
                            </li>
                            <li class="dish-name">Chicken Tikka Masala<p class="description">Deliziosi pezzi di pollo
                                    marinati nella paprika, cotti nel tandoor e poi saltati in padella con cipolle,
                                    pomodori e spezie</p>
                            </li>
                            <li class="dish-name">Chicken Korma<p class="description">Pezzi di pollo cotti in una
                                    salsa cremosa con anacardi tritati</p>
                            </li>
                            <li class="dish-name">Chili Chicken<p class="description">Pezzi di pollo marinati nello
                                    yogurt e crema leggermente speziata</p>
                            </li>
                            <li class="dish-name">Chicken Curry<p class="description">Pollo in salsa curry</p>
                            </li>
                            <li class="dish-name">Lamb Curry<p class="description">Piccoli pezzi di agnello cotti
                                    lentamente con una ricca miscela di spezie, in salsa di pomodoro e cipolla</p>
                            </li>
                            <li class="dish-name">Lamb Tikka Masala<p class="description">Piccoli pezzi di agnello
                                    cotti in una densa salsa di spezie aromatiche</p>
                            </li>
                            <li class="dish-name">Palak Chicken<p class="description">Pezzi di pollo marinati con
                                    spinaci freschi e cremosi</p>
                            </li>
                            <li class="dish-name">Chicken Vindaloo<p class="description">Un tipico piatto della cucina
                                    indiana, introdotto a Goa dai commercianti portoghesi di spezie. Perfetto per chi
                                    ama il cibo piccante</p>
                            </li>
                        </ul>
                    </div>
                    <!--Bread-->
                    <div class="Bread section-list">
                        <h2 class="section-title">Bread</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Tandoori Roti<p class="description">Pane integrale cotto nel forno
                                    Tandoor, senza lievito</p>
                            </li>
                            <li class="dish-name">Naan<p class="description">Pane classico del Tandoor, morbido e
                                    delizioso</p>
                            </li>
                            <li class="dish-name">Butter Naan<p class="description">Pane indiano del Tandoor,
                                    spennellato con burro per un sapore e un aroma aggiuntivi</p>
                            </li>
                            <li class="dish-name">Garlic Naan<p class="description">Pane naan arricchito con aglio,
                                    particolarmente gustoso</p>
                            </li>
                            <li class="dish-name">Cheese Naan<p class="description">Pane naan farcito con formaggio
                                    cremoso</p>
                            </li>
                            <li class="dish-name">Mix Bread<p class="description">Un cestino pieno di una varietà di
                                    pani indiani: Tandoori Roti, Naan, Butter Naan, Garlic Naan e Cheese Naan</p>
                            </li>
                            <li class="dish-name">Aloo Naan<p class="description">Pane naan farcito con patate e
                                    spezie finemente bilanciate</p>
                            </li>
                        </ul>
                    </div>
                    <!--Vegetarian Menu-->
                    <div class="Vegetarian-Menu section-list">
                        <h2 class="section-title">Vegetarian Menu</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Shahi Paneer<p class="description">Paneer indiano in forma di
                                    cubetti, preparato con pasta di salsa di anacardi, burro e ghee</p>
                            </li>
                            <li class="dish-name">Cheese Chili<p class="description">Cubetti di paneer con deliziosi
                                    peperoni e cipolle</p>
                            </li>
                            <li class="dish-name">Palak Paneer<p class="description">Cubetti di paneer cotti in
                                    spinaci cremosi</p>
                            </li>
                            <li class="dish-name">Dal Makhni<p class="description">Tre tipi di lenticchie, ammollate
                                    per 24 ore e poi cucinate con spezie e burro</p>
                            </li>
                            <li class="dish-name">Dal Punjabi<p class="description">Lenticchie gialle cucinate con un
                                    abile mix di spezie e salsa di cipolla</p>
                            </li>
                            <li class="dish-name">Chana Masala<p class="description">Ceci bianchi cucinati con spezie
                                    e una leggera salsa di cipolla</p>
                            </li>
                            <li class="dish-name">Baingan Bharta<p class="description">Crema di melanzane affumicate,
                                    cotte nel forno Tandoor e mescolate con curry e salsa di pomodoro</p>
                            </li>
                            <li class="dish-name">Mix Vegetable<p class="description">Verdure di stagione, cotte in
                                    padella e condite con curcuma</p>
                            </li>
                            <li class="dish-name">Malai Kofta<p class="description">Polpette di paneer, patate e
                                    frutta secca in una delicata salsa al curry</p>
                            </li>
                            <li class="dish-name">Jalfrezi Vegetable<p class="description">Curry a base di pomodoro
                                    del nord dell'India cucinato con verdure e tofu</p>
                            </li>
                            <li class="dish-name">Matar Paneer<p class="description">Moderno piatto vegetariano di
                                    piselli e paneer in salsa di pomodoro</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
