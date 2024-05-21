<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

<style>
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12 {
        padding: 0;
    }

    .slider img {
        max-width: 96%;
        height: auto;
        margin-left: 36px;
    }

    .slick-prev,
    .slick-next {
        font-size: 0;
        /* Hide default text */
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

    .slick-prev:before,
    .slick-next:before {
        content: '';
    }

    .slick-prev svg,
    .slick-next svg {
        fill: #00AC4E;
        width: 40px;
        height: 40px;
    }

    .clr {
        background-color: rgb(225 227 225);
        font-family: cursive;
    }


    .story:hover,
    .content:hover {
        color: #292929;
    }

    .space {
        padding: 40px 0px;
    }

    .image-wrapper {
        overflow: hidden;
    }

    .frame {
        transition: transform 0.3s ease;
        /* display: block; */
        width: 100%;
        height: auto;
    }

    .frame:hover {
        transform: scale(1.1);
    }

    .heading {
        font-size: 40px;
        font-weight: 500;
        color: #292929;
    }

    .content {
        text-transform: uppercase;
        color: #292929;
        padding: 0;
    }

    .contentBox {
        text-align: center;

    }

    .card {
        padding: 0;
        width: 23%;
        height:55vh;
    }

    .card:last-child {
        margin-bottom: 3rem;
    }

    @media (min-width: 769px) {
        .container {
            max-width: 1438px;
        }
    }

    .buyButton {
        padding: 4px 21px;
        background-color: #00AC4E;
    }

    .moreButton {
        padding: 4px 21px;
        background-color: #757776;
        color: white;
    }

    .Top{
        padding:40px 0px 5px 0px;
    }
    .buttons {
        display: none !important;
    }

    .card:hover .buttons {
            display: flex !important; 
        }
</style>


<!-- slider -->
<section class="slider">
    <div><img src="assets/images/Mango.jpg" alt="Mango"></div>
    <div><img src="assets/images/guava.jpg" alt="guava"></div>
    <div><img src="assets/images/Pineapple.jpg" alt="Pineapple"></div>
    <div><img src="assets/images/origin.jpg" alt="Origin"></div>
    <div><img src="assets/images/Peach.jpg" alt="Peach"></div>
    <div><img src="assets/images/tender.jpg" alt="Tender"></div>
    <div><img src="assets/images/Pinacolada.jpg" alt="Pina Colada"></div>
</section>


<!-- vedio -->
<section class="clr">
    <div class="container space">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="story heading" href="https://www.youtube.com/@naturalicecreams1984">40 years of scooping up
                    love -
                    Story of Naturals Ice Cream</a>
            </div>
        </div>
    </div>

    <div class="container text-center ">
        <iframe width="80%" height="515" src="https://www.youtube.com/embed/NBeNtpyRSm8?si=G9lAt_p2c4FyvBHF"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>


<!-- frame -->
<section class="space clr">
    <div class="container" style="max-width: 1500px;">
        <div class="row">
            <div class="col-md-6 p-2">
                <a href="https://www.instagram.com/naturalicecream/" target="_blank">
                    <div class="image-wrapper">
                        <img src="assets/images/f1.jpg" alt="img" class="frame">
                    </div>
                </a>
            </div>
            <div class="col-md-6 p-2">
                <a href="https://www.instagram.com/naturalicecream/" target="_blank">
                    <div class="image-wrapper">
                        <img src="assets/images/f2.jpg" alt="img" class="frame">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-2">
                <a href="https://www.instagram.com/naturalicecream/" target="_blank">
                    <div class="image-wrapper">
                        <img src="assets/images/f3.jpg" alt="img" class="frame">
                    </div>
                </a>
            </div>
            <div class="col-md-6 p-2">
                <a href="https://www.instagram.com/naturalicecream/" target="_blank">
                    <div class="image-wrapper">
                        <img src="assets/images/f4.jpg" alt="img" class="frame">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- BEST SELLERS -->
<section class="clr space">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h7 class="heading">BEST SELLERS</h7>
            </div>
        </div>

        <div class="row d-flex justify-content-between">

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c1.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">mango ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c2.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">sitaphal ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c3.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">strawberry ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c4.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">black grapes ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

          
        </div>

        <div class="row d-flex justify-content-between">

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c5.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">papaya pineapple ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c6.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">muskmelon ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c7.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">watermelom ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 card">
                <a href="https://www.instagram.com/naturalicecream/" >
                    <div class="image-wrapper">
                        <img src="assets/images/c8.jpg" alt="img" class="frame">
                    </div>
                    <div class="contentBox  Top">
                        <a href="" class="content">chikoo ice cream</a>
                    </div>
                    <div class="row  buttons d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success buyButton">Buy</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary moreButton">Read More</button>
                        </div>
                    </div>
                </a>
            </div>

          
        </div>
        
    </div>

</section>














<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Slider JS CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
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