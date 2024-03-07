<div>
    <!-- ne tranding slider End -->
    <div class="ss_addver_slider_wrapper">
        <div class="container">
            <div class="slider-area">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($slide as $key => $item)
                        <div class="item {{$key == 0 ? 'active' : '' }}">
                            <!-- <div class="ne_tran_label_wrapper"> -->
                            <div class="content lr_banner_content_inner_wrapper">
                                <h2 data-animation="animated bounceInLeft">{{$item->name}}</h2>
                            </div>
                            <!-- </div> -->
                            <img class="d-block w-100" src="{{asset($item->img)}}" width="100%">
                        </div>
                        @endforeach
                        <div class="carousel-nevigation">
                            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <i
                                    class="fa fa-angle-left"></i>
                            </a>
                            <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i
                                    class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main js file start-->
    <!--resent news Start-->
    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Sports</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_sport_slider_wrapper">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Sports</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_sport_slider_wrapper">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Business</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_businees_slider_wrapper">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs1.jpg')}}" alt="img">
                                                            <h2>business</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">Proin gravida nibh
                                                                    vel velit auctor.</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs2.jpg')}}" alt="img">
                                                            <h2>team work</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">Faangs diverge prospect</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs3.jpg')}}" alt="img">
                                                            <h2>business</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">
                                                                    Beats did something today</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @include('livewire.dev-tap-right')
                @include('livewire.dev-contact')
                
            </div>
        </div>
    </div>
    <!--resent news End-->
</div>