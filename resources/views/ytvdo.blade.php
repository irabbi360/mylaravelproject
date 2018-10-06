<html>
<head>
    <title>Youtube Channel Videos</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Click the image one by one to see the different layout */

        /* Owl Carousel */

        .owl-prev {
            background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938188/left-arrow_rlxamy.png') left center no-repeat;
            height: 54px;
            position: absolute;
            top: 50%;
            width: 27px;
            z-index: 1000;
            left: 2%;
            cursor: pointer;
            color: transparent;
            margin-top: -27px;
        }

        .owl-next {
            background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938220/right-arrow_zwe9sf.png') right center no-repeat;
            height: 54px;
            position: absolute;
            top: 50%;
            width: 27px;
            z-index: 1000;
            right: 2%;
            cursor: pointer;
            color: transparent;
            margin-top: -27px;
        }

        .owl-prev:hover,
        .owl-next:hover {
            opacity: 0.5;
        }


        /* Owl Carousel */


        /* Popup Text */

        .white-popup-block {
            background: #FFF;
            padding: 20px 30px;
            text-align: left;
            max-width: 650px;
            margin: 40px auto;
            position: relative;
        }

        .popuptext {
            display: table;
        }
        .popuptext p {
            margin-bottom: 10px;
        }
        .popuptext span {
            font-weight: bold;
            float: right;
        }
        /* Popup Text */

        /* Icon CSS */
        .item {
            position: relative;
        }
        .item i {
            display: none;
            font-size: 4rem;
            color: #FFF;
            opacity: 1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }
        .item a {
            display: block;
            width: 100%;
        }
        .item a:hover:before {
            content: "";
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 1;
        }
        .item a:hover i {
            display: block;
            z-index: 2;
        }
    </style>
</head>
<body>

<div class="owl-carousel">
    @foreach($videoLists as $videoList)
    <div class="item">
        <a class="popup-youtube" href="https://www.youtube.com/watch?v={{ $videoList->id->videoId }}?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent">
            <img src="{{ $videoList->snippet->thumbnails->medium->url }}"><i class="fa fa-play" aria-hidden="true"></i></a>
    </div>
    @endforeach
    {{--<div class="item">
        <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"><i class="fa fa-play" aria-hidden="true"></i></a>
    </div>

    <div class="item">
        <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg"><i class="fa fa-play" aria-hidden="true"></i>
        </a>
    </div>--}}
</div>
{{--@foreach($videoLists as $videoList)
    <li>
        {{ $videoList->snippet->title }}
        <iframe width="420" height="315"
                src="https://www.youtube.com/embed/{{ $videoList->id->videoId }}">
        </iframe>
    </li>
@endforeach--}}
</body>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        margin: 20,
        responsiveClass: true,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            568: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $(document).ready(function() {
        $('.popup-youtube, .popup-text').magnificPopup({
            disableOn: 320,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true
        });
    });
    $(document).ready(function() {
        $('.popup-text').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#name',
            callbacks: {
                beforeOpen: function() {
                    if ($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#name';
                    }
                }
            }
        });
    });
</script>
</html>