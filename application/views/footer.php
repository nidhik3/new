<!-- footer -->
 
<section>
    <footer id="footer">
        <div class="container space">
            <div class="row" style="margin-bottom: 2rem;">
                <div class=" col-md-4">
                  <a href="Main"> <img src="assets/img/flogo.png" alt="" style="padding-bottom: 10px;"></a> 
                  
                    <ul class="custom-list">
                        <li>
                            <div class="row pt-3 ">
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <i style="margin-right: 6px; font-size: 17px;" class="fa-solid fa-phone"></i>
                                    <a href="tel:+971 28724547">+971 28724547</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="row pt-3">
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <i style="margin-right: 6px;font-size: 17px;" class="fa-regular fa-envelope"></i>
                                    <a href="mailto:info@admogholding.com">info@admogholding.com</a>
                                </div>
                            </div>
    
                        </li>
    
                        <li>
                            <div class="row pt-3 ">
                               
                                <div class="col-md-10 p-0 d-flex align-items-center">
                                    <i style="margin-right: 7px; font-size: 17px;" class="fa-solid fa-location-dot loc"></i>
                                    <a href="">Floor No. 4, MW Properties Bldg., <br>
                                        ADNEC Area, Abu Dhabi, UAE</a>
                                </div>
                            </div>
                        </li>
    
    
                    </ul>
                </div>

                <div class="col-md-3 qlinks">
                    <h3 class="sub-heading">QUICK LINKS</h3>
                    <ul class="custom-list p-0">
                        <li class="qlinks"><a href="Main">Home</a> </li>
                        <li class="qlinks"><a href="About">About Us</a></li>
                        <li class="qlinks"><a href="Service">Services</a></li>
                        <li class="qlinks"><a href="Project">Projects</a> </li>
                        <li class="qlinks"><a href="Contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class=" col-md-4 nletter">
                    <h3 class="sub-heading">NEWSLETTER</h3>
                    <p>Subscribe to the newsletter for <br> regular updates.</p>
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <input type="text" placeholder="Email Address" name="subscribe" id="subscribe">
                            <button class="blue">Subscribe</button>
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-1 social">

                    <div class="social-item">
                        <a href="" class="s-icon fb" target="_blank">
                            <i class="fab fa-facebook-f d-flex justify-content-center align-items-center ICON"
                                ></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="" class="s-icon ig" target="_blank">
                            <i class="fab fa-instagram d-flex justify-content-center align-items-center ICON"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="" class="s-icon wa" target="_blank">
                            <i class="fab fa-whatsapp d-flex justify-content-center align-items-center ICON"></i>
                        </a>
                    </div>


                </div>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="copyright col-md-6 text-center">
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


<!-- popup -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var popups = document.querySelectorAll('.popup');
        var popLinks = document.querySelectorAll('.pop');
        var overlay = document.createElement('div');
        overlay.className = 'popup-overlay';
        document.body.appendChild(overlay);
    
        popLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var popupId = this.getAttribute('data-popup');
                var popup = document.getElementById(popupId);
                if (popup) {
                    popup.classList.add('show');
                    overlay.classList.add('show');
                }
            });
        });
    
        overlay.addEventListener('click', function() {
            document.querySelectorAll('.popup.show').forEach(function(popup) {
                popup.classList.remove('show');
            });
            overlay.classList.remove('show');
        });
    });
    </script>
    
