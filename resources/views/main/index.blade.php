@extends ('layouts.app')
@section ('content')

    <section id="hero">
        <h1>Ordena tu tatuaje <br>a domicilio</h1> <br>
        <button id="see-products-btn">ver tatuajes</button>
    </section>

    <section id="social-media">
        <div class="container">
            <ul>
                <li><a href="#"><img src="/assets/media/instagram.png" id="social-icon" alt="instagram-img"></a></li>
                <li><a href="#"><img src="/assets/media/facebook.png" id="social-icon" alt="facebook-img"></a></li>
                <li><a href="#"><img src="/assets/media/whatsapp.png" id="social-icon" alt="whatsapp-img"></a></li>
                <li><a href="#"><img src="/assets/media/linkedin.png" id="social-icon" alt="linkedin-img"></a></li>
            </ul>
        </div>
    </section>

    <div id="slider-promotions">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true" id="slider-content">
            <div class="carousel-indicators">
                <button type="button" id="btn-slider" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" id="btn-slider" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" id="btn-slider" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active" data-bs-interval="5000">
                    <img src="/assets/media/tatto-slider-1.jpg" class="d-block w-100" alt="...">/7445162+6+3

                    <div class="carousel-caption d-none d-md-block">
                        <h5>PROMOCIONES</h5>
                        <p>Descuento de 20% en art body</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/assets/media/tatto-slider-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>PROMOCIONES</h5>
                        <p>Obten un 2x1 para parejas</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/assets/media/tatto-slider-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>PROMOCIONES</h5>
                        <p>Miercoles de descuento del 30% </p>
                    </div>
                </div>
            </div>
        </div>

            
    </div>


    <div id="btn-chat-container">
        <button id="btn-chat"> Chat with us!</button>
    </div>

    <div id="chat">
    
        <div id="chat-container">

            <div class="chat-ventana">

                <div id="output">  </div>
                <div id="actions">  </div>
                
            </div>

            <input 
                type="text"
                name="username"
                id="username"
                placeholder="username"
            >
            <input 
                type="text"
                name="message"
                id="message"
                placeholder="message"
            >
            <button id="send"> Send </button>

        </div>
    </div>




    <script src="/socket.io/socket.io.js"></script>
    <script src="chat.js"></script>

        



@endsection