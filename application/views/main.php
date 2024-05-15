<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

<style>
  .slider img {
            max-width: 96%;
            height: auto;
            margin-left: 36px;
        }

        .slick-prev, .slick-next {
            font-size: 0; /* Hide default text */
            color: #00AC4E;
            background: none;
            border: none;
            z-index: 1000;
            cursor: pointer;
        }

        .slick-prev {
            left: 80px;
            z-index: 1000;
        }

        .slick-next {
            right: 80px;
            z-index: 1000;
        }

        .slick-prev:before, .slick-next:before {
            content: '';
        }

        .slick-prev svg, .slick-next svg {
            fill: #00AC4E;
            width: 40px;
            height: 40px;
        }
</style>

<section class="slider">
    <div><img src="assets/images/Mango.jpg" alt="Mango"></div>
    <div><img src="assets/images/Pineapple.jpg" alt="Pineapple"></div>
    <div><img src="assets/images/origin.jpg" alt="Origin"></div>
    <div><img src="assets/images/Peach.jpg" alt="Peach"></div>
    <div><img src="assets/images/tender.jpg" alt="Tender"></div>
    <div><img src="assets/images/Pinacolada.jpg" alt="Pina Colada"></div>
</section>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS CDN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg></button>',
                nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg></button>'
            });
        });
    </script>
