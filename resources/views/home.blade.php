<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Kode+Mono:wght@400..700&family=Slackside+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44b694a7ec.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    @endif
</head>
<body class="index">

    <!-- Navbar mobile-->
    <div class="navbar-mobile">
        <div class="site-logo-mobile" role="heading" aria-level="1">
            <a class="text-logo-mobile" href="/">So kocht Südtirol</a>
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
            <p>the girl & the fig is located in the beautiful Sonoma Plaza and features a wonderful antique bar with French aperitifs, unique and traditional cocktails, an award-winning Rhône-Alone wine list, a seasonal menu, cheese & charcuterie platters, outdoor garden patio seating & outdoor parklet seating.</p>
        </div>
    </div>

    <!--Navbar desktop-->
    <div class="navbar-desktop site-header pt-5">
            <ul class="nav wtf justify-content-center">
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
            <a class="text-logo-desktop" href="/">So kocht Südtirol</a>
        </div>
    </div>

    <main class="page">
        <section id="landing" class="section" data-router="segment" data-router-uri="/menu/" data-router-title="Menu"></section>

        {{-- <section class="tabs">
            <div class="tabs-nav">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item-btn" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="true"  data-router-uri="/menus/#/dinner">Dinner</button>
                    </li>
                    <li class="nav-item-btn" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="false" data-router-uri="/menus/#/lunch">Lunch</button>
                    </li>
                    <li class="nav-item-btn" role="presentation">
                        <button class="btn btn-tabs" role="tab" aria-selected="false" data-router-uri="/menus/#/wine-by-the-bottle">Wine</button>
                    </li>
                </ul>
                <div class="menu">
                    <!--starter-->
                    <div class="starter section-list">
                        <h2 class="section-title">Starter</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Veg. Samosa<p class="description">Leggendaria pietanza da strada con una tradizione secolare, caratterizzata da una croccante pasta triangolare ripiena di patate speziate e piselli</p>
                            </li>
                            <li class="dish-name">Aloo Tikki<p class="description">Una morbida palla di patate speziate, appiattita e fritta a puntino</p>
                            </li>
                            <li class="dish-name">Mixed Vegetable Pakora<p class="description">Verdure di stagione passate nella farina di ceci e fritte fino a diventare croccanti</p>
                            </li>
                            <li class="dish-name">Paneer Pakora<p class="description">Formaggio paneer fresco avvolto in una pastella piccante di farina di ceci e fritto</p>
                            </li>
                            <li class="dish-name">Mixed Veg<p class="description">Una selezione di Samosa vegetariano, Pakora di verdure miste e Aloo Tikki</p>
                            </li>
                            <li class="dish-name">Mixed Non-Veg.<p class="description">Una combinazione di Pakora di pesce, Seekh Kebab di pollo e Pakora di pollo</p>
                            </li>
                        </ul>
                    </div>
                    <!--Tandoori Specials-->
                    <div class="Tandoori-Specials section-list">
                        <h2 class="section-title">Tandoori Specials</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Chicken Seekh Kebab<p class="description">Spiedini di pollo, grigliati o preparati in forno tandoori. Un piatto tradizionale pakistano</p>
                            </li>
                            <li class="dish-name">Chicken Tikka<p class="description">Teneri pezzi di petto di pollo marinati nello yogurt e spezie</p>
                            </li>
                            <li class="dish-name">Fish Tikka<p class="description">Freschi pezzi di salmone, marinati nello yogurt, miele, zafferano, zenzero e una miscela di spezie</p>
                            </li>
                            <li class="dish-name">Malai Tikka<p class="description">Pezzi di pollo marinati nello yogurt e crema leggermente speziata</p>
                            </li>
                            <li class="dish-name">Haryali Mint Tikka<p class="description">Pezzi di pollo su spiedini, marinati nella menta e spezie, preparati nel forno tandoori</p>
                            </li>
                            <li class="dish-name">Tandoori Chicken<p class="description">Classiche cosce di pollo indiane, marinate per 24 ore nello yogurt e spezie</p>
                            </li>
                            <li class="dish-name">Lamb Seekh Kebab<p class="description">Spiedini di agnello, grigliati o preparati nel forno tandoori. Un piatto tradizionale pakistano</p>
                            </li>
                        </ul>
                    </div>
                    <!--Main course-->
                    <div class="main-course section-list">
                        <h2 class="section-title">Main course (Served with Rice)</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Butter Chicken<p class="description">Pezzi di pollo cotti nel tandoor e poi preparati in una salsa speciale al burro e spezie</p>
                            </li>
                            <li class="dish-name">Chicken Tikka Masala<p class="description">Deliziosi pezzi di pollo marinati nella paprika, cotti nel tandoor e poi saltati in padella con cipolle, pomodori e spezie</p>
                            </li>
                            <li class="dish-name">Chicken Korma<p class="description">Pezzi di pollo cotti in una salsa cremosa con anacardi tritati</p>
                            </li>
                            <li class="dish-name">Chili Chicken<p class="description">Pezzi di pollo marinati nello yogurt e crema leggermente speziata</p>
                            </li>
                            <li class="dish-name">Chicken Curry<p class="description">Pollo in salsa curry</p>
                            </li>
                            <li class="dish-name">Lamb Curry<p class="description">Piccoli pezzi di agnello cotti lentamente con una ricca miscela di spezie, in salsa di pomodoro e cipolla</p>
                            </li>
                            <li class="dish-name">Lamb Tikka Masala<p class="description">Piccoli pezzi di agnello cotti in una densa salsa di spezie aromatiche</p>
                            </li>
                            <li class="dish-name">Palak Chicken<p class="description">Pezzi di pollo marinati con spinaci freschi e cremosi</p>
                            </li>
                            <li class="dish-name">Chicken Vindaloo<p class="description">Un tipico piatto della cucina indiana, introdotto a Goa dai commercianti portoghesi di spezie. Perfetto per chi ama il cibo piccante</p>
                            </li>
                        </ul>
                    </div>
                    <!--Bread-->
                    <div class="Bread section-list">
                        <h2 class="section-title">Bread</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Tandoori Roti<p class="description">Pane integrale cotto nel forno Tandoor, senza lievito</p>
                            </li>
                            <li class="dish-name">Naan<p class="description">Pane classico del Tandoor, morbido e delizioso</p>
                            </li>
                            <li class="dish-name">Butter Naan<p class="description">Pane indiano del Tandoor, spennellato con burro per un sapore e un aroma aggiuntivi</p>
                            </li>
                            <li class="dish-name">Garlic Naan<p class="description">Pane naan arricchito con aglio, particolarmente gustoso</p>
                            </li>
                            <li class="dish-name">Cheese Naan<p class="description">Pane naan farcito con formaggio cremoso</p>
                            </li>
                            <li class="dish-name">Mix Bread<p class="description">Un cestino pieno di una varietà di pani indiani: Tandoori Roti, Naan, Butter Naan, Garlic Naan e Cheese Naan</p>
                            </li>
                            <li class="dish-name">Aloo Naan<p class="description">Pane naan farcito con patate e spezie finemente bilanciate</p>
                            </li>
                        </ul>
                    </div>
                    <!--Vegetarian Menu-->
                    <div class="Vegetarian-Menu section-list">
                        <h2 class="section-title">Vegetarian Menu</h2>
                        <ul class="starter-list menu-list-item">
                            <li class="dish-name">Shahi Paneer<p class="description">Paneer indiano in forma di cubetti, preparato con pasta di salsa di anacardi, burro e ghee</p>
                            </li>
                            <li class="dish-name">Cheese Chili<p class="description">Cubetti di paneer con deliziosi peperoni e cipolle</p>
                            </li>
                            <li class="dish-name">Palak Paneer<p class="description">Cubetti di paneer cotti in spinaci cremosi</p>
                            </li>
                            <li class="dish-name">Dal Makhni<p class="description">Tre tipi di lenticchie, ammollate per 24 ore e poi cucinate con spezie e burro</p>
                            </li>
                            <li class="dish-name">Dal Punjabi<p class="description">Lenticchie gialle cucinate con un abile mix di spezie e salsa di cipolla</p>
                            </li>
                            <li class="dish-name">Chana Masala<p class="description">Ceci bianchi cucinati con spezie e una leggera salsa di cipolla</p>
                            </li>
                            <li class="dish-name">Baingan Bharta<p class="description">Crema di melanzane affumicate, cotte nel forno Tandoor e mescolate con curry e salsa di pomodoro</p>
                            </li>
                            <li class="dish-name">Mix Vegetable<p class="description">Verdure di stagione, cotte in padella e condite con curcuma</p>
                            </li>
                            <li class="dish-name">Malai Kofta<p class="description">Polpette di paneer, patate e frutta secca in una delicata salsa al curry</p>
                            </li>
                            <li class="dish-name">Jalfrezi Vegetable<p class="description">Curry a base di pomodoro del nord dell'India cucinato con verdure e tofu</p>
                            </li>
                            <li class="dish-name">Matar Paneer<p class="description">Moderno piatto vegetariano di piselli e paneer in salsa di pomodoro</p>
                            </li>
                        </ul>
                    </div>
                </div>
	        </div>
        </section> --}}
    </main>

    <footer class="site-footer">
        <div class="site-footer-content">
            <ul class="social social--footer">
                <li class="social_item">
                    <a class="social-btn" href="/" target="_blank">
                        <i class="fa-brands fa-instagram fa-2x"></i>
                    </a>
                </li>
            </ul>
            <nav class="site-nav" aria-label="footer">
                <ul class="site-nav-menu">
                    <li class="site-nav-menu_item is-active">
                        <a class="site-nav-menu__btn" href="https://www.google.com/maps/place/77%C2%B011'42.8%22N+44%C2%B055'15.1%22W/@77.1952302,-44.9234419,17z/data=!3m1!4b1!4m4!3m3!8m2!3d77.195229!4d-44.920867?entry=ttu" target="_blank" aria-current="location">Work with us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <aside class=""></aside>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

