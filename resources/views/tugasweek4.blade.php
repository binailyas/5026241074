<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Tugas Week 4 - LK NRP Genap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Roboto', sans-serif;
                color: #37474f;
            }

            nav {
                position: relative;
                z-index: 10;
            }

            /* navbar */
            .navbar-landing {
                font-weight: bold;
                font-size: 24px;
                color: #111B47 !important;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            /*navbar kiri*/
            .navbar-nav .nav-link {
                color: #505F98 !important;
                font-size: 14px;
                transition: 0.3s;
            }

            /* judul */
            .hero-title {
                font-size: 50px;
                font-weight: 600;
                color: #091133;
                line-height: 1.2;
                margin-top: 200px;
            }

            /* deskripsi */
            .hero-description {
                color: #505F98;
                font-size: 16px;
                margin: 20px 0 90px 0;
                z-index: 2;
                position: relative
            }

            /* button dark blue (buy now, purchase ui kit) */
            .btn-dark-blue {
                background-color: #111B47;
                color: white;
                border-radius: 2px;
                padding: 6px 30px;
            }

            /* button learn more */
            .btn-learn_more {
                border: 2px solid #091133;
                color: #091133;
                border-radius: 2px;
                padding: 6px 30px;
                font-weight: bold;
            }

            /* image desainer_1 */
            .hero-img {
                width: 170%;
                max-width: none;
                height: auto;
                position: relative;
                margin-left: -50%;
                margin-top: -90px;
                z-index: -1;
            }


        </style>

    </head>

    <body>
        <nav class="navbar navbar-expand-md bg-transparent">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- navbar kiri -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link px-3" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Contact</a></li>
                </ul>

                <!-- navbar tengah -->
                <a class="navbar-landing" href="#">Landing</a>

                <!-- navbar kanan -->
                <div>
                    <a href="#" class="btn-dark-blue btn-sm px-5">Buy Now</a>
                </div>
            </div>
        </nav>

        <div class="container">
        <div class="row align-items-start" style="min-height: 80vh;">
            <div class="col-md-6">

                <!-- title -->
                <h1 class="hero-title">Introduce Your Product Quickly & Effectively</h1>

                <!-- deskription -->
                <p class="hero-description">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    <br><br>
                    mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                </p>

                <!-- button bawah -->
                <div class="d-flex">
                    <button class="btn btn-dark-blue mr-4">Purchase UI Kit</button>
                    <button class="btn btn-learn_more">Learn More</button>
                </div>
            </div>

            <!-- image -->
            <div class="col-md-6 text-right">
                <img src="assets/pertemuan4/designer_1.png" alt="Hero Illustration" class="hero-img">
            </div>
        </div>
    </div>
    </body>

</html>
