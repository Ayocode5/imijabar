
<link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/cookieconsent.min.css') }}">

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">

<script src='https://www.google.com/recaptcha/api.js'></script>
{{-- <style>
    #preloader #status {
        background-image: url({{ asset('public/uploads/preloader.gif') }});
    }

    .top,
    .main-nav nav .navbar-nav .nav-item .dropdown-menu,
    .video-button:before,
    .video-button:after,
    .special .read-more a,
    .service .read-more a,
    .testimonial-bg,
    .project .read-more a,
    .team-text,
    .cta .overlay,
    .blog-area .blog-image .date,
    .blog-area .read-more a,
    .newsletter-area .overlay,
    .footer-social-link ul li a,
    .scroll-top,
    .single-section .read-more a,
    .sidebar .widget .search button,
    .comment button,
    .contact-item:hover .contact-icon,
    .product-item .text button,
    .btn-arf,
    .project-photo-carousel .owl-nav .owl-prev,
    .project-photo-carousel .owl-nav .owl-next,
    .faq h4.panel-title a,
    .team-social li a:hover,
    .doc_detail_social li i,
    .nav-doctor .nav-link.active {
        background: #3867D6!important;
    }
    .main-nav nav .navbar-nav .nav-item a:hover,
    .main-nav nav .navbar-nav .nav-item:hover a,
    .service .service-item .text h3 a:hover,
    .project .project-item .text h3 a:hover,
    .blog-area .blog-item h3 a:hover,
    .footer-item ul li a:hover,
    .sidebar .widget .type-2 ul li a:hover,
    .sidebar .widget .type-1 ul li:before,
    .sidebar .widget .type-1 ul li a:hover,
    .single-section h3,
    .contact-icon,
    .product-item .text h3 a:hover,
    .career-main-item h3,
    .reg-login-form .new-user a {
        color: #3867D6!important;
    }
    .text-animated li a:hover,
    .feature .feature-item {
        background-color: #3867D6!important;
    }
    .text-animated li a:hover,
    .special .read-more a,
    .footer-social-link ul li a,
    .contact-item:hover .contact-icon,
    .faq h4.panel-title,
    .team-social li a:hover {
        border-color: #3867D6!important;
    }



    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a,
    .contact-item:hover .contact-icon {
        color: #fff!important;
    }
    .feature .feature-item:hover,
    .service .read-more a:hover,
    .project .read-more a:hover,
    .blog-area .read-more a:hover,
    .single-section .read-more a:hover,
    .comment button:hover,
    .doc_detail_social li:hover i {
        background: #333!important;
    }
    .footer-social-link ul li a:hover {
        background: transparent!important;
    }
    .special .read-more a:hover {
        background: transparent!important;
        border-color: #fff!important;
    }


</style> --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Tinos:wght@400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Zeyada&display=swap');

    /* 
    font-family: 'Barlow', sans-serif;  
    font-family: 'Tinos', serif;
    font-family: 'Zeyada', cursive;
*/

    body {
        font-family: 'Barlow', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* 
    Start Navbar
*/

    .toggle.ios,
    .toggle-on.ios,
    .toggle-off.ios {
        border-radius: 20rem;
    }

    .toggle.ios .toggle-handle {
        border-radius: 20rem;
    }

    .nav-item {
        font-family: 'Barlow', sans-serif;
        font-weight: 600;
        font-size: 1em;
    }

    /* 
    End Navbar
*/

    /* 
    Start Breadcrumb
*/
    .breadcrumb {
        margin: 20px 0px;
        margin-left: 100px;
        background-color: #fff;
        padding: 0px;
    }

    /* 
    End Breadcrumb
*/


    /* 
    Start Jumbotron 
*/
    .jumbotron_logo {
        width: 100px;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        text-align: center;
    }


    .jumbotron_batik {
        height: 200px;
        width: 100%;
    }


    .jumbotron_carousel {
        width: 100%;
    }

    .jumbotron_carousel .carousel-inner .carousel-item img {
        height: 300px;
        object-fit: cover;
    }

    .jumbotron_carousel .carousel-item .carousel-caption {
        text-align: left;
        margin-bottom: 32px;
    }

    .jumbotron_carousel .carousel-item .carousel-caption h2 {
        text-decoration: underline;
        font-family: 'Tinos', serif;
        font-size: 1.3em;
        font-weight: 700;
    }


    .jumbotron_carousel .carousel-item .carousel-caption p {
        font-family: 'Tinos', serif;
        font-weight: 400;
        font-size: 1em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .jumbotron_carousel .carousel-item .carousel-caption .date_author {
        font-weight: 500;
    }

    .jumbotron_carousel .carousel-item .carousel-caption .btn_show_jumbotron {
        font-weight: 500;
    }

    .welcome_text {
        padding: 5%;
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: .6s;
        transition-property: opacity;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        opacity: 0;
    }

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
        transform: translateX(0);
        transform: translate3d(0, 0, 0);
    }


    .carousel-fade .carousel-item .carousel-caption button {
        opacity: 0;
        transform: translate(-100px, 0);
        transition-duration: .6s;
        transition-property: all;
    }

    .carousel-fade .carousel-item.active .carousel-caption button {
        opacity: 1;
        transform: translate(0, 0);
        transition-duration: .6s;
        transition-property: all;
    }

    .overlay_jumbotron {
        position: absolute;
        background: rgba(38, 56, 64, 0.5);
        opacity: 0.5;
        width: 100%;
        height: 100%;
    }

    .carousel-indicators .active {
        width: 137px;
        transition: all 0.3s ease-in-out;
        background-color: #0078C1 !important;
    }

    /* 
    End Jumbotron 
*/




    /* 
    Start Style Berita Acara
 */
    .berita-acara {
        margin: 60px 8px;
    }

    .title-berita-acara {
        font-size: 24px;
        font-weight: bold;
        padding-bottom: 3px;
    }

    .border_title {
        background-color: #5996ec;
        padding: 2px;
        margin-bottom: 35px;
        width: 19%;
    }

    .border_acara {
        background-color: #5996ec;
        padding: 2px;
        margin-bottom: 35px;
        width: 73%;
    }

    .title-berita-acara {
        margin-top: 30px;
    }

    .tanggal-berita {
        margin-top: 30px;
        font-weight: 500;
    }

    .title-berita {
        font-weight: 700;
        font-size: 1.5em;
        font-family: 'Tinos', serif;
    }

    .content-berita {
        overflow: hidden;
        padding: 8px 8px;
        background-color: #F8F8F8;
    }

    .content-berita p {
        font-size: 1em;
    }

    .content-berita .cover-berita {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 3px;
        display: block;
        -moz-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .content-berita:hover .cover-berita {
        -moz-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .img-wrap {
        overflow: hidden;
        border-radius: 3px;
    }

    .btn_switch_category_event {
        width: 100%;
        background-color: #F8F8F8;
        border: 0px;
        color: #000;
        margin-bottom: 20px;
    }

    .btn_switch_category_event:hover {
        background-color: #F8F8F8;
        border: 1px solid #5996ec;
        color: #000;
    }

    .show>.btn-secondary.btn_switch_category_event {
        background-color: #F8F8F8;
        border: 1px solid #5996ec;
        color: #000;
    }

    .item_event {
        border: none;
        border-radius: 3px;
        margin-bottom: 20px;
    }

    .card-body {
        background-color: #F8F8F8;
    }

    .content-event {
        background-color: #263840;
        margin-bottom: 20px;
    }

    .tgl-event {
        color: #fff;
        font-size: 22px;
        font-weight: bold;
    }

    .month-event {
        color: #fff;
        font-size: 24px;
        font-weight: 700;
    }


    .loc-event,
    .name-event {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
    }


    .title-event {
        font-size: 25px;
        font-weight: bold;
    }

    .detail-event {
        font-size: 12px;
        font-weight: medium;
    }



    /* 
    End Style Berita Acara
 */


    /* 
    START STYLE TENTANG IMI
*/
    #tentangIMI {
        background-color: #F4F4F9;
        font-weight: 500;
        font-size: 1em;
    }

    .wrap_tentangImi {
        padding: 8% 5%;
        text-align: justify;
        text-justify: inter-word;
    }

    .wrap_tentangImi .signature_imijabar {
        font-family: 'Tinos', serif;
        text-align: center;
        font-size: 1.15em;
    }

    .wrap_tentangImi .signature_imijabar img {
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        bottom: 45px;
        width: 70%;
    }

    .wrap_tentangImi .signature_imijabar p span {
        font-size: 64px;
        top: -24px;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .wrap_tentangImi .signature_imijabar .signature_text {
        font-family: 'Zeyada', cursive;
        font-size: 1.5em;
    }

    .selengkapnya_tentangImi {
        font-family: 'Barlow', sans-serif;
        font-size: 0.7em;
    }

    .slide_tentangImi2 {
        margin-top: 16px;
    }

    .wrap_background_imi {
        border: none;
    }

    .image_border_right {
        border-right: 2px solid rgba(38, 56, 64, 0.5);
        ;
    }

    .image_border_left {
        border-left: 2px solid rgba(38, 56, 64, 0.5);
    }

    /* 
    END STYLE TENTANG
*/


    /* 
    Start Style Struktur Pengurus
*/
    #strukturPengurus .head_strukturPengurus {
        padding: 0 6%;
    }

    #strukturPengurus .head_strukturPengurus h2 {
        font-weight: 700;
        font-size: 24px;
    }

    #strukturPengurus .border_heading_strukturPengurus {
        padding: 2px;
        width: 40%;
        background-color: #5996EC;
    }

    .link_selengkapnya_struktur_pengurus span {
        color: #0078C1;
        font-size: 20px;
        display: inline-block;
        transform: translate(0, 0);
        transition: all 0.5s ease-in-out;
    }

    .link_selengkapnya_struktur_pengurus:hover span {
        transform: translate(8px, 0);
    }



    .multi-item-carousel {
        margin: 0 4% !important;
    }

    .multi-item-carousel .carousel-item>img {
        object-fit: cover;
    }

    .multi-item-carousel .carousel-item:hover .text_profile_pengurus {
        opacity: 1;
        transform: translate(0, 0);
    }

    .multi-item-carousel .carousel-item:hover .overlay_struktur_pengurus {
        opacity: 1;
    }

    .overlay_struktur_pengurus {
        background: rgba(0, 0, 0, 0.7);
        left: 0;
        right: 0;
        opacity: 0;
        width: 90%;
        margin: 0 auto;
        height: 100%;
        position: absolute;
        transition: all 0.5s ease-in-out;
    }

    .text_profile_pengurus {
        opacity: 0;
        width: 100%;
        transform: translate(0, 200px);
        transition: all 0.5s ease-in-out;
        text-align: center;
        position: absolute;
        margin: 0 auto;
        bottom: 10%;
        left: 0;
        right: 0;
        z-index: 20;
        color: white;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    }

    .multi-item-carousel .carousel-control-prev {
        width: 10.1%;
    }

    .multi-item-carousel .carousel-control-next {
        width: 10.1%;

    }


    .multi-item-carousel .carousel-control-prev-icon,
    .multi-item-carousel .carousel-control-next-icon {
        outline: rgba(0, 0, 0, 0);
        background-color: rgba(0, 0, 0, 0.3);
        background-size: 100%, 100%;
        border-radius: 50%;
    }

    /* 
    End Style Struktur Pengurus
*/

    /* 
    Start Style Newsletter
*/
    #newsletter {
        background-color: #F4F4F9;
    }

    .wrap_newsletter {
        text-align: justify;
        text-justify: inter-word;
        padding: 8% 5%;
    }

    .wrap_newsletter h3 {
        font-size: 20px;
        font-weight: 700;
        font-style: italic;
    }

    .wrap_newsletter h3 span {
        font-size: 16px;
        font-weight: 500;
        font-style: normal;
    }

    .postMailIcon {
        width: 40%;
        margin-bottom: 8%;
    }

    .input_newsletter {
        width: 100%;
        border: none;
        background-color: #F8F8F8;
        font-size: 16px;
        font-weight: 500;
        color: #7a7a7a;
        height: 32px;
        padding: 8px;
    }

    .button_newsletter {
        height: 32px;
        position: absolute;
        right: 0;
    }

    /* 
    End Style Newsletter
*/

    /* footer */

    .footer-background {
        height: 730px;
        object-fit: cover;
    }

    .title-ttd {
        font-size: 14px;
    }

    .footer-logo {
        width: 150px;
        height: 150px;
    }

    .icon-footer {
        width: 30px;
        height: 30px;
        margin-right: 20px;
        margin-top: 20px;
    }

    .icon-footer-row {
        margin-left: 20px;
    }


    .about-footer li,
    .about-footer a {
        color: #000;
        list-style-type: none;
        text-decoration: none;
    }

    .footer-credit {
        font-size: 12px;
        text-align: center;
        font-weight: bold;
    }

    .middle-footer {
        margin-top: 30px;
    }


    .paraf-ttd {
        font-family: 'Zeyada', cursive;
        font-size: 24px;
        /* border-bottom: 3px solid #5996EC; */
    }

    .border_ttd {
        position: absolute;
        background-color: #5996ec;
        padding: 2px;
        width: 135px;
        right: 0px;
    }

    /* footer */

    /* Start Visi Misi */
    .visimisi-content {
        margin: 0px 100px;
    }

    .visimisi-title {
        font-family: 'Barlow', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #263840;
    }

    .visimisi-outline {
        font-family: 'Barlow', sans-serif;
        font-size: 72px;
        font-weight: bold;
        -webkit-text-stroke: 2px #263840;
        -webkit-text-fill-color: white;
        margin-top: 30px;
    }

    .visimisi-jabar {
        font-family: 'Barlow', sans-serif;
        font-size: 32px;
        font-weight: bold;
        color: #263840;
        padding-bottom: 7px;
        padding-left: 10px;
    }

    .visimisi-arrow {
        width: 80px;
        height: 16px;
        margin: 0px 20px;
    }

    .visimisi-img {
        height: 500px;
    }

    .visimisi-detail {
        font-family: 'Barlow', sans-serif;
        font-size: 24px;
        font-weight: medium;
        color: #263840;
        margin-bottom: 10px;
        margin-left: 60px;
    }

    /* .border_visi {
    background-color: #5996ec;
    padding: 1px;
    margin-bottom: 30px;
    width: 80%;
} */

    /* End Visi Misi */



    /* Tablet Style */
    @media screen and (min-width: 768px) {

        /* 
        Start Jumbotron style
    */
        .jumbotron-img {
            height: 456px;
        }

        .jumbotron_carousel .carousel-inner .carousel-item img {
            height: 400px;
        }

        .jumbotron_batik {
            height: 250px;
        }

        .jumbotron_logo {
            width: 120px;
        }

        .welcome_text {
            padding: 15% 5%;
        }

        .jumbotron_carousel .carousel-item .carousel-caption {
            text-align: left;
            margin-bottom: 32px;
            margin-left: -20px;
            margin-right: 0;
        }



        .jumbotron_carousel .carousel-item .carousel-caption p {
            font-size: 1em;
            white-space: unset;
            overflow: visible;
            text-overflow: unset;
        }

        /* 
        End Jumbotron style
    */


        /* 
        Start Style Berita Acara
    */
        .content-berita {
            border-bottom: 1px solid rgba(38, 56, 64, 0.5);
            padding: 16px 16px;
        }

        .title-berita-acara {
            font-size: 30px;
        }

        .title-berita {
            font-size: 32px;
        }


        /* 
        End Style Berita Acara
    */


        /* 
        Start TentangIMI style
    */
        .wrap_tentangImi {
            padding: 8% 4%;
        }

        .wrap_tentangImi .signature_imijabar .signature_text {
            font-size: 48px;
        }

        /* 
        End TentangIMI style
    */


        /* 
        Start Struktur Pengurus style
    */

        #strukturPengurus .head_strukturPengurus h2 {
            font-size: 48px;
        }

        .multi-item-carousel .carousel-inner .carousel-item {
            margin-right: inherit;
        }

        .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item,
        .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item+.carousel-item+.carousel-item {
            display: block;
        }


        .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
        .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
        .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item+.carousel-item {
            transition: none;
        }


        .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
            position: absolute;
            top: 0;
            right: -25%;
            z-index: -1;
            display: block;
            visibility: visible;
        }

        .multi-item-carousel .carousel-inner .carousel-item-next,
        .multi-item-carousel .carousel-inner .carousel-item-prev {
            position: relative;
            transform: translate3d(0, 0, 0);
        }


        .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            display: block;
            visibility: visible;
        }


        .multi-item-carousel .active.carousel-item-left+.carousel-item-next.carousel-item-left,
        .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item,
        .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
            position: relative;
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }

        .multi-item-carousel .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
        .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item,
        .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item,
        .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
            position: relative;
            transform: translate3d(100%, 0, 0);
            display: block;
            visibility: visible;
        }

        .multi-item-carousel .carousel-control-prev {
            left: -5%;
        }

        .multi-item-carousel .carousel-control-next {
            right: -5%;
        }

        /* 
        End Struktur Pengurus style
    */

        /* 
        Start Newsletter style
    */
        .wrap_newsletter {
            padding: 8% 4%;
        }

        .wrap_newsletter h3 {
            font-size: 48px;
            font-weight: 700;
            font-style: italic;
        }

        .wrap_newsletter h3 span {
            font-size: 32px;
            font-weight: 500;
            font-style: normal;
        }

        .postMailIcon {
            width: 25%;
            margin-bottom: 8%;
        }

        .input_newsletter {
            width: 100%;
            border: none;
            background-color: #F8F8F8;
            font-size: 24px;
            font-weight: 500;
            color: #7a7a7a;
            height: 68px;
            padding: 8px;
        }

        .button_newsletter {
            height: 68px;
            position: absolute;
            right: 0;
        }

        /* 
        End Newsletter style
    */


    }

    @media screen and (min-width: 992px) {

        /* 
        Start Jumbotron Style
    */
        .jumbotron_logo {
            width: 164px;
            margin-left: 97px;
        }

        .jumbotron_batik {
            height: 340px;
        }

        .welcome_text {
            padding: 80px 0 0 100px;
            max-height: 260px;
        }

        .jumbotron_carousel .carousel-item .carousel-caption {
            text-align: left;
            margin-bottom: 130px;
            margin-left: -20px;
            margin-right: 0px;
        }

        .jumbotron_carousel .carousel-inner .carousel-item img {
            height: 550px;
        }

        .jumbotron_carousel .carousel-item .carousel-caption h2 {
            font-size: 36px;
            font-weight: bold;
        }

        .jumbotron_carousel .carousel-item .carousel-caption p {
            font-size: 1em;
        }

        /* 
        End Jumbotron Style
    */

        /* 
        Start Berita Acara style
    */
        .title-berita-acara {
            font-size: 48px;
            font-weight: bold;
            padding-bottom: 3px;
        }

        .berita-acara {
            margin: 60px 90px;
        }

        .content-berita {
            border-bottom: 1px solid rgba(38, 56, 64, 0.5);
            padding: 28px 32px;
        }

        .tanggal-berita {
            margin-top: 0px;
        }

        .title-berita {
            font-size: 36px;
        }

        .content-berita .cover-berita {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 3px;
        }


        .content-event {
            /* padding: 19px 16px; */
            background-color: #263840;
            margin-bottom: 20px;
        }



        .tgl-event {
            color: #fff;
            font-size: 30px;
            font-weight: bold;
        }

        .loc-event,
        .name-event {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }

        .card-body {
            background-color: #F8F8F8;
        }

        .title-event {
            font-size: 24px;
            font-weight: bold;
        }

        .detail-event {
            font-weight: medium;
        }


        /* 
        End Style Berita Acara
    */

        /* 
        Start TentangIMI Style
    */
        .wrap_tentangImi .signature_imijabar p span {
            font-size: 144px;
            top: -90px;
        }

        .wrap_tentangImi .signature_imijabar {
            text-align: right;
            font-size: 32px;
        }

        .wrap_tentangImi .signature_imijabar img {
            margin-left: unset;
            margin-right: unset;
            left: unset;
            right: 0;
            /* text-align: center; */
            bottom: 60px;
            width: 45%;
        }

        .selengkapnya_tentangImi {
            font-family: 'Barlow', sans-serif;
            font-size: 24px;
        }

        .slide_tentangImi2 {
            line-height: 38px;
        }

        #tentangIMI {
            font-size: 24px;
        }

        .wrap_background_imi {
            border-top: 2px solid rgba(38, 56, 64, 0.5);
            border-bottom: 2px solid rgba(38, 56, 64, 0.5);

            box-sizing: border-box;
        }

        /* 
        End TentangIMI Style
    */


        /* 
        Start Newsletter Style
    */
        .postMailIcon {
            width: 75%;
            margin-bottom: 8%;
            float: right;
        }

        /* 
        End  Newsletter Style
    */

        /* Footer */

        .footer-background {
            width: 100%;
            height: 300px;
        }

        .footer-logo {
            width: 120px;
            height: 120px;
        }

        .title-ttd {
            font-size: 24px;
        }

        .border_ttd {
            width: 140px;
        }

        .middle-footer {
            margin: 0px;
        }

        .icon-footer {
            width: 24px;
            height: 24px;
            margin-right: 30px;
            margin-top: 30px;
        }

        .title-footer {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .sub-footer {
            font-weight: medium;
        }

        .footer-credit {
            font-size: 16px;
        }

        /* footer */
    }

</style>
