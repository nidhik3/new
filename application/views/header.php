<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    a,
    a:hover {
        text-decoration: none;
        color: black;
    }

    section {
        padding: 30px 0px;
    }

    ul {
        list-style-type: none;
    }

    ul li {
        display: inline-block;
        padding: 10px 5px;
    }

    .checkbtn {
        color: rgb(143, 23, 23);
        font-size: 30px;
        display: none;
        float: left;
    }

    #check {
        display: none;
    }

    /* for mobile */
    @media(max-width: 952px) {
     

        ul {
            position: fixed;
            height: 100vh;
            width: 100%;
            background-color: beige;
            text-align: center;
            top: 80px;
            left: 0;
            
        }

        ul li {
            display: block;
            padding: 10px 5px;
        }

        #check:checked~ul {
            left: 0;
        }
    }
    
    @media(max-width: 858px) {
        .checkbtn {
            display: block;
        }

        ul {
            position: fixed;
            height: 100vh;
            width: 100%;
            background-color: beige;
            text-align: center;
            top: 80px;
            left: 0;
            
        }

        ul li {
            display: block;
            padding: 10px 5px;
        }

        #check:checked~ul {
            left: 0;
        }
    }

</style>

<section class="pt-0">
    <header id="header">
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center">



                <div class="col-md-4 col-3">
                    <div class="col-md-3">
                        <a href="<?php echo base_url(); ?>"> <img src="assets/images/logo.png"></a>
                    </div>
                </div>
                <!-- <div class="col-md-7  d-flex justify-content-around">
                    <div class="col-md-2">
                        <a href="<?php echo base_url();?>">HOME</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>">MENU</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>">ABOUT US</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>">GET IN TOUCH</a>
                    </div>
                </div> -->



                <div class="col-md-7 col-5 pt-3 d-flex justify-content-end  align-items-center">
                    <ul>
                        <li><a href="<?php echo base_url();?>">HOME</a></li>

                        <li><a href="<?php echo base_url(); ?>">MENU</a></li>

                        <li><a href="<?php echo base_url(); ?>">ABOUT US</a></li>

                        <li><a href="<?php echo base_url(); ?>">GET IN TOUCH</a></li>
                    </ul>
                </div>

                <div class="col-md-1 col-3">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        ☰
                    </label>
                </div>

            </div>
        </div>
    </header>
</section>



<!-- navbar -->
<!-- <section class="pt-0">
    <header id="header" class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="col-md-3">
                    <a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png"></a>
                </div>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url();?>">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>">MENU</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>">GET IN TOUCH</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->