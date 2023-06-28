<html>

<head>

    <title>Home Page</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="first-select">
            <h1>ELLDeems PERfume BOTTles NIG.</h1>
          
        </div>
        <nav>
            <ul>
                <section class="step-one">
                    <li><a href="/">Home</a></li>
                </section>
            <section class="step-two">
                    <li> <a href="about">About Us</a></li>
            </section>
            <section class="step-three">
            </section>
                <li> <a href="contact"> Contact Us</a></li>
                <section class="step-four">
                <li> <a href="gallery">Gallery</a></li>
                </section>
                <section  class="step-five">
                @if(Auth::user())
                    <li><a href="logout">Logout</a></li>
                @else
                <li><a href="login">Login</a></li>
                </section>
                @endif
            </ul>
        </nav>
    </header>
    {{-- <hr> --}}
    @yield('main-section')
</body>
<footer>
    <p>&copy;Copyright ELLDeems PERfume BOTTles</p>
</footer>
<script>
    const swiper=new Swiper('.swiper',{
        direction:"horizontal",
        loop:true,

        autoplay:{
            delay:2000
        },
    })
</script>

</html>
