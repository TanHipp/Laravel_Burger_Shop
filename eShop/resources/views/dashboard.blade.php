<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'Admin' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* CSS Document */

        * {
            padding: 0px;
            margin: 0px;
        }

        html,
        body {
            color: rgb(121, 127, 132);

            width: 100%;
            height: 100%;
        }
        #one, #two, #three, #four, #five {
    /* Thêm thuộc tính filter để làm tăng độ sáng cho màu nền */
    filter: brightness(130%);
}


        #wrap {
            width: 100%;
            height: 25%;
            position: relative;
            margin: 0 auto 0 auto;
            overflow: hidden;
        }

        #lightings {
            bottom: -60px;
            position: absolute;
            width: 100%;
        }

        section {
            /*border-radius*/
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            height: 20px;
            width: 100%;
            position: relative;
            margin: auto;

        }

        #one {
            /*animation*/
            -webkit-animation: one 5s ease-in-out infinite alternate;
            -moz-animation: one 5s ease-in-out infinite alternate;
            -ms-animation: one 5s ease-in-out infinite alternate;
            -o-animation: one 5s ease-in-out infinite alternate;
            animation: one 5s ease-in-out infinite alternate;
        }

        @-webkit-keyframes one {
            from {
                -webkit-box-shadow: 0 0 250px 20px #473C78;
            }

            to {
                -webkit-box-shadow: 0 0 100px 15px #F72A3B;
            }
        }

        @-moz-keyframes one {
            from {
                -moz-box-shadow: 0 0 250px 20px #473C78;
            }

            to {
                -moz-box-shadow: 0 0 100px 15px #F72A3B;
            }
        }

        @-o-keyframes one {
            from {
                -o-box-shadow: 0 0 250px 20px #473C78;
            }

            to {
                -o-box-shadow: 0 0 100px 15px #F72A3B;
            }
        }

        @keyframes one {
            from {
                box-shadow: 0 0 250px 20px #473C78;
            }

            to {
                box-shadow: 0 0 100px 15px #F72A3B;
            }
        }

        #two {
            width: 90%;
            /*animation*/
            -webkit-animation: two 4s ease-in-out infinite alternate;
            -moz-animation: two 4s ease-in-out infinite alternate;
            -ms-animation: two 4s ease-in-out infinite alternate;
            -o-animation: two 4s ease-in-out infinite alternate;
            animation: two 4s ease-in-out infinite alternate;
        }

        @-webkit-keyframes two {
            from {
                -webkit-box-shadow: 0 0 250px 20px #18C499;
            }

            to {
                -webkit-box-shadow: 0 0 100px 15px #D8F05E;
            }
        }

        @-moz-keyframes two {
            from {
                -moz-box-shadow: 0 0 250px 20px #18C499;
            }

            to {
                -moz-box-shadow: 0 0 100px 15px #D8F05E;
            }
        }

        @-o-keyframes two {
            from {
                -o-box-shadow: 0 0 250px 20px #18C499;
            }

            to {
                -o-box-shadow: 0 0 100px 15px #D8F05E;
            }
        }

        @keyframes two {
            from {
                box-shadow: 0 0 250px 20px #18C499;
            }

            to {
                box-shadow: 0 0 100px 15px #D8F05E;
            }
        }

        #three {
            width: 80%;
            /*animation*/
            -webkit-animation: three 3s ease-in-out infinite alternate;
            -moz-animation: three 3s ease-in-out infinite alternate;
            -ms-animation: three 3s ease-in-out infinite alternate;
            -o-animation: three 3s ease-in-out infinite alternate;
            animation: three 3s ease-in-out infinite alternate;
        }

        @-webkit-keyframes three {
            from {
                -webkit-box-shadow: 0 0 250px 20px #FFDD00;
            }

            to {
                -webkit-box-shadow: 0 0 100px 15px #3E33FF;
            }
        }

        @-moz-keyframes three {
            from {
                -moz-box-shadow: 0 0 250px 20px #FFDD00;
            }

            to {
                -moz-box-shadow: 0 0 100px 15px #3E33FF
            }
        }

        @-o-keyframes three {
            from {
                -o-box-shadow: 0 0 250px 20px #FFDD00;
            }

            to {
                -o-box-shadow: 0 0 100px 15px #3E33FF
            }
        }

        @keyframes three {
            from {
                box-shadow: 0 0 250px 20px #FFDD00;
            }

            to {
                box-shadow: 0 0 100px 15px #3E33FF
            }
        }

        #four {
            width: 70%;
            /*animation*/
            -webkit-animation: four 2s ease-in-out infinite alternate;
            -moz-animation: four 2s ease-in-out infinite alternate;
            -ms-animation: four 2s ease-in-out infinite alternate;
            -o-animation: four 2s ease-in-out infinite alternate;
            animation: four 2s ease-in-out infinite alternate;
        }

        @-webkit-keyframes four {
            from {
                -webkit-box-shadow: 0 0 250px 20px #781848;
            }

            to {
                -webkit-box-shadow: 0 0 100px 15px #F2BBE9;
            }
        }

        @-moz-keyframes four {
            from {
                -moz-box-shadow: 0 0 250px 20px #781848;
            }

            to {
                -moz-box-shadow: 0 0 100px 15px #F2BBE9;
            }
        }

        @-o-keyframes four {
            from {
                -o-box-shadow: 0 0 250px 20px #781848;
            }

            to {
                -o-box-shadow: 0 0 100px 15px #F2BBE9;
            }
        }

        @keyframes four {
            from {
                shadow: 0 0 250px 20px #781848;
            }

            to {
                shadow: 0 0 100px 15px #F2BBE9;
            }
        }

        #five {
            width: 60%;
            /*animation*/
            -webkit-animation: five 1s ease-in-out infinite alternate;
            -moz-animation: five 1s ease-in-out infinite alternate;
            -ms-animation: five 1s ease-in-out infinite alternate;
            -o-animation: five 1s ease-in-out infinite alternate;
            animation: five 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes five {
            from {
                -webkit-box-shadow: 0 0 250px 20px #42F2A1;
            }

            to {
                -webkit-box-shadow: 0 0 100px 15px #F4F6AD;
            }
        }

        @-moz-keyframes five {
            from {
                -moz-box-shadow: 0 0 250px 20px #42F2A1;
            }

            to {
                -moz-box-shadow: 0 0 100px 15px #F4F6AD;
            }
        }

        @-o-keyframes five {
            from {
                -o-box-shadow: 0 0 250px 20px #42F2A1;
            }

            to {
                -o-box-shadow: 0 0 100px 15px #F4F6AD;
            }
        }

        @keyframes five {
            from {
                box-shadow: 0 0 250px 20px #42F2A1;
            }

            to {
                box-shadow: 0 0 100px 15px #F4F6AD;
            }
        }


        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
    {{ $css ?? '' }}
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 sidenav">
                <h4 class="mb-4">Admin Blog</h4>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Trang Chu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.danhmuc.index') }}">Quan Li Danh Muc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.sanpham.index') }}">Quan Li San Pham</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.show.contacts') }}">Quan Li Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">...</a>
                    </li>
                </ul>
                <br>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Blog..">
                    <button class="btn btn-outline-secondary" type="button">
                        <span class="bi bi-search"></span>
                    </button>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="mt-3 mb-4">
                    <h4 class="d-inline me-2"><small>RECENT POSTS</small></h4>
                    <hr class="d-inline-block" style="width: 70%;">
                </div>
                <div class="mt-4">
                    <h2 class="h1">I Love Food</h2>
                    <h5><span class="bi bi-clock"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <h5><span class="badge bg-danger">Food</span> <span class="badge bg-primary">Ipsum</span></h5>
                    <p class="lead">Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing
                        elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="mt-5">
                    <h2 class="h1">Officially Blogging</h2>
                    <h5><span class="bi bi-clock"></span> Post by John Doe, Sep 24, 2015.</h5>
                    <h5><span class="badge bg-success">Lorem</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="mt-4">
                    <h4 class="h2">Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="mt-5">
                    <p><span class="badge bg-secondary">2</span> Comments:</p>
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <img src="bandmember.jpg" class="img-fluid rounded-circle" height="65" width="65"
                                alt="Avatar">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="h3">Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
                            <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2 text-center">
                            <img src="bird.jpg" class="img-fluid rounded-circle" height="65" width="65"
                                alt="Avatar">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="h3">John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
                            <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.</p>
                            <p><span class="badge bg-secondary">1</span> Comment:</p>
                            <div class="row mt-4">
                                <div class="col-sm-2 text-center">
                                    <img src="bird.jpg" class="img-fluid rounded-circle" height="65" width="65"
                                        alt="Avatar">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="h3">Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                                    <p>Me too! WOW!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <article id="wrap">
        <article id="lightings">
            <section id="one">
                <section id="two">
                    <section id="three">
                        <section id="four">
                            <section id="five">

                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </article>
    </article>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    {{ $js ?? '' }}
</body>

</html>
