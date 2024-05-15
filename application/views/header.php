<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturals</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- ========================== -->
    <!-- ==========border======== -->
    <!-- ========================== -->

    <link rel="stylesheet"
        href="//assets-cdn-refresh.getbento.com/stylesheet/theogdenver-v2-copy/1/scss/main.ec266e9cc8a8de32494868d34b1591f8.scss" />



    <script src="https://www.google.com/recaptcha/api.js?render=6LcM_jgpAAAAALjf-oyMP7LJ4JR0YVdXJBSk5XMm"></script>

    <script type="text/javascript">
        Modernizr.addTest("maybemobile", function () { return (Modernizr.touchevents && Modernizr.mq("only screen and (max-width: 768px)")) ? true : false; });
    </script>
    <!-- ========================== -->
    <!-- ========================== -->
    <style>
        a, a:hover{
            text-decoration: none;
        }
        .btn {
            background-color: #00AC4E;
            border-radius: 5px;
            text-transform: none;
        }

        header {
            background-color: white;
        }

        .lookingFor {

            width: 24vw;
            height: 6vh;
            border: 1px solid transparent;
            background-color: rgba(225, 227, 225, 1.00);
            border-radius: 5px;
            padding: 9px;
        }

        .search-button {
            position: absolute;
            right: 67px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #00AC4E;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            height: 5vh;
        }

        .search-button i {
            font-size: 16px;
        }

        .bar {
            position: relative;
        }

        .container::after {
            display: none !important;
        }

        .nav {
            background-color: #39393F;

        }
        ul{
            list-style-type: none;
           
        }
        .items, .items:hover{
            color:white;
            padding:10px 20px;
            font-size:19px;
            font-weight: 500;
        }
    </style>


</head>


<body>
    <header>
        <section style="padding-top: 40px;">
            <div class="container pl-0">
                <div class="row py-4  d-flex justify-content-between">

                    <div class="col-md-5 d-flex align-items-center justify-content-between">
                        <div class="col-md-6 p-0">
                            <a href="<?php echo base_url('main')?>"><img src="assets/images/logo.jpg" alt="logo" style="max-width: 100%;"></a>
                        </div>
                        <div class="col-md-5  p-0">
                            <button type="button" class="btn btn-success">Order Now</button>
                        </div>
                    </div>

                    <div class="col-md-5 bar">
                        <input type="text" class="lookingFor" name="search" placeholder="I'm looking for..">
                        <button class="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                </div>

            </div>
        </section>
    </header>
    <section class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="d-flex justify-content-center align-items-center m-2">
                        <li><a class ="items" href="#">Ingredient Story</a></li>
                        <li><a class ="items" href="#">Products</a></li>
                        <li><a class ="items" href="#">Our Legacy</a></li>
                        <li><a class ="items" href="#">Malai Magic</a></li>
                        <li><a class ="items" href="#">Franchise Queries</a></li>
                        <li><a class ="items" href="#">Store Locator</a></li>
                        <li><a class ="items" href="#">Blogs</a></li>
                    </ul>
                  
                </div>
            </div>
        </div>
    </section>
</body>

</html>