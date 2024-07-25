<!-- footer -->
<section>
    <footer id="footer">
        <div class="container space">
            <div class="row" style="margin-bottom: 2rem;">
                <div class=" col-md-4">
                    <img src="assets/img/flogo.png" alt="" style="padding-left: 32px; padding-bottom: 10px;">
                    <ul class="custom-list">
                        <li>
                            <div class="row pt-2">
                                <div class="col-md-2 d-flex justify-content-end align-items-center">
                                    <i style="margin-right: 6px; font-size: 17px;" class="fa-solid fa-phone"></i>

                                </div>
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <a href="tel:+971 28724547">+971 28724547</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row pt-2">
                                <div class="col-md-2  d-flex  justify-content-end align-items-center">
                                    <i style="margin-right: 6px;font-size: 17px;" class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <a href="mailto:info@admogholding.com">info@admogholding.com</a>
                                </div>
                            </div>

                        </li>

                        <!-- <li>
                                <div class="row pt-2">
                                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                                        <i style="margin-right: 6px; font-size: 17px;" class="fa-solid fa-globe"></i>


                                    </div>
                                    <div class="col-md-10 p-0 d-flex align-items-center">
                                        <a href="www.admogholding.com">www.admogholding.com</a>
                                    </div>
                                </div>
                            </li> -->

                        <li>
                            <div class="row pt-2">
                                <div class="col-md-2 pt-2 d-flex justify-content-end ">
                                    <i style="margin-right: 7px; font-size: 17px;" class="fa-solid fa-location-dot"></i>

                                </div>
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <a href="">Floor No. 4, MW Properties Bldg., <br>
                                        ADNEC Area, Abu Dhabi, UAE</a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>

                <div class="col-md-3">
                    <h3 class="sub-heading">QUICK LINKS</h3>
                    <ul class="custom-list p-0">
                        <li class="qlinks"><a href="main">Home</a> </li>
                        <li class="qlinks"><a href="about">About Us</a></li>
                        <li class="qlinks"><a href="service">Services</a></li>
                        <li class="qlinks"><a href="project">Projects</a> </li>
                        <li class="qlinks"><a href="contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class=" col-md-4">
                    <h3 class="sub-heading">NEWSLETTER</h3>
                    <p>Subscribe to the newsletter for <br> regular updates.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Email Address" name="subscribe" id="subscribe">
                        </div>
                        <div class="col-md-3 pt-1">
                            <a href="" class="blue"> Subscribe</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 ">

                    <div class="social-item">
                        <a href="" class="s-icon fb" target="_blank">
                            <i class="fab fa-facebook-f d-flex justify-content-center align-items-center"
                                style="height: 6vh; width: 3vw; border-radius: 4px; background-color: #1A406D !important; color: white !important;"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="" class="s-icon ig" target="_blank">
                            <i class="fab fa-instagram d-flex justify-content-center align-items-center"
                                style="height: 6vh; width: 3vw; border-radius: 4px; background-color: #1A406D !important; color: white !important;"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="" class="s-icon wa" target="_blank">
                            <i class="fab fa-whatsapp d-flex justify-content-center align-items-center"
                                style="height: 6vh; width: 3vw; border-radius: 4px; background-color: #1A406D !important; color: white !important;"></i>
                        </a>
                    </div>


                </div>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="copyright col-md-4 text-center">
                    &copy; 2024 ADMOG Holding. All rights reserved.
                </div>
            </div>

        </div>

    </footer>
</section>

<!-- footer -->



<script>
    window.addEventListener('scroll', function () {
        var header = document.getElementById('header');
        var imageHeight = document.querySelector('.image-container').offsetHeight;
        if (window.scrollY > imageHeight) {
            header.classList.add('solid');
        } else {
            header.classList.remove('solid');
        }
    });
</script>