
<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
<!--                $sliders as $key => $slider-->
                <?php foreach ($sliders as $slider): ?>
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="<?= $slider->id ?>" data-masterspeed="default"
                    data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v1-1.jpg"
                    data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?= "/files/Sliders/photo/" . $slider->photo ?>">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['-150','-130','-120','-125']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="icon-holder">
                                <span class="icon-power"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['-55','-60','-55','-65']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="text"><?= $slider->name ?></div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['55','30','25','5']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                         style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center" style="">
                            <div class="big-title">
                                <?= $slider->description ?>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['1000','900','700','450']" data-whitespace="normal"
                         data-hoffset="['15','15','15','15']" data-voffset="['200','155','140','110']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                         style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content middle-slide text-center">
                            <div class="btn-box">
                                <a class="btn-one" href="#"><b>Orçamento</b><span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!--Start Sobre area-->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-image-box">
                    <div class="icon-box">
                        <span class="icon-solar-energy"></span>
                    </div>
                    <div class="image-box-one">
                        <img src="/images/resources/a1.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-two">
                        <img src="/images/resources/a2.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-three">
                        <img src="/images/resources/a3.png" alt="Awesome Image">
                    </div>
                    <div class="image-box-four">
                        <img src="/images/resources/a4.png" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-text">
                    <div class="sec-title">
                        <p>Sobre a nossa empresa</p>
                        <div class="title">Simplicidade & eficiência</div>
                        <div class="border-box"></div>
                    </div>
                    <div class="inner-content">
                        <?php foreach ($about as $ab): ?>
                        <h3><?= $ab->title ?></h3>
                        <?php endforeach; ?>

                        <div class="text">
                          <?php foreach ($about as $ab): ?>
                              <?= strlen($ab->description) >  200 ? substr($ab->description, 0, 300) . "..." : $ab->description ?>
                            <?php endforeach; ?>
                        </div>
                        <ul class="solar-services">
                            <li class="single-solar-box">
                                <div class="icon">
                                    <span class="icon-farm"></span>
                                </div>
                                <div class="title">
                                    <h3><br>Área Agrícola</h3>
                                </div>
                            </li>
                            <li class="single-solar-box">
                                <div class="icon">
                                    <span class="icon-farming-and-gardening"></span>
                                </div>
                                <div class="title">
                                    <h3></br>Áreas residenciais</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="button">
                            <a class="btn-two" href="/sobre/5">Ver Mais<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Sobre Area-->

<!--Start slogan area-->
<section class="slogan-area martop-minus">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content fix">
                    <div class="title float-left">
                        <h2>Alguma dúvida?<br> Por favor entre em contato.</h2>
                    </div>
                    <div class="button float-right">
                        <a style="width: 250px;  text-align: center;}" class="btn-three" href="#">Contato<span class="icon-null"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->

<!--Start Projetos-->
<section class="fact-projects-area">
    <div class="pattern paroller">
        <img src="/images/pattern/fact-project-bg.jpg" alt="Pattern">
    </div>
    <div class="container">
        <div class="row">
            <!--Start Single fact counter-->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="text-align: center">
                <div class="project-content">
                    <div class="sec-title">
                        <p>Solayriz Slz Engenharia</p>
                        <div class="title">Projetos</div>
                        <div class="border-box center"></div>
                    </div>
                    <div class="inner-content">
                        <p>Indignation and dislike men who are so beguiled<br> and demoralized by the charms.</p>
                        <div class="button">
                            <a class="btn-two" href="/projetos">Ver Todos os Projetos<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container latest-project">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="project-carousel owl-carousel owl-theme">
                    <?php foreach ($projects as $proj): ?>
                    <div class="single-project-style1">
                        <div class="img-holder">
                            <img id="img-project2" src="<?= "/files/Projects/photo/" . $proj->photo ?>" alt="Imagem produtos">
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="link-box">
                                        <a href="#"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories">
                                <h5><?= $proj->category_id ?></h5>
                            </div>
                            <div class="title-box">
                                <h3><?= $proj->name ?></h3>
                                <span>Solayriz</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Projetos-->



<!--Start Why Choose Area-->
<section class="why-choose-area secpd1">
    <div class="container">
        <div class="sec-title">
            <p>BENEFÍCIOS DA ENERGIA SOLAR</p>
            <div class="title">Por que a energia solar é a melhor</div>
            <div class="border-box"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="choose-carousel owl-carousel owl-theme">
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Gerar<br> Própria Eletricidade</a></h3>
                        <span class="icon-null-1"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Melhorar<br> o meio ambiente</a></h3>
                        <span class="icon-ecology"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Baixo<br> custo de energia</a></h3>
                        <span class="icon-solar-panel"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="single-choose-box text-center">
                        <h3><a href="#">Reduzir<br> contas de energia</a></h3>
                        <span class="icon-money"></span>
                        <div class="button">
<!--                            <a href="#"><span class="icon-null"></span></a>-->
                        </div>

                    </div>
                    <!--End Single Choose Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose Area-->

<!--Start Working Process Area-->
<section class="working-process-area" style="background-image:url(images/parallax-background/working-process-bg.jpg);">
    <div class="image-box wow fadeInRight" data-wow-duration="3000ms">
        <div class="image paroller">
            <img class="zoom-fade" src="/images/resources/working-process.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="sec-title with-text clrwhite text-center">
            <p>Working Process</p>
            <div class="title">How to Get Better Results</div>
            <div class="border-box center bgblue"></div>
            <span>Solartech redefines your relationship with energy. Save money. Minimize your carbon footprint. Take control of your power costs today!</span>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="working-process-carousel owl-carousel owl-theme">
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 01</h6>
                        </div>
                        <h3>Consult<br> Our Expert Team</h3>
                        <p>Frequently occur that pleasures have to be repudiated & annoyan accepted. </p>
                        <div class="button">
                            <a class="btn-two" href="#">Appointment<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 02</h6>
                        </div>
                        <h3>Ordering<br> Your Equipments</h3>
                        <p> Pleasures to secure other greater or else worse endures pains avoid. </p>
                        <div class="button">
                            <a class="btn-two" href="#">Our Products<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 03</h6>
                        </div>
                        <h3>Solar<br> Panel Installation</h3>
                        <p>Indignations and dislikes men who are so demoralized by the charms.</p>
                        <div class="button">
                            <a class="btn-two" href="#">Appointment<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->

                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 01</h6>
                        </div>
                        <h3>Consult<br> Our Expert Team</h3>
                        <p>Frequently occur that pleasures have to be repudiated & annoyan accepted. </p>
                        <div class="button">
                            <a class="btn-two" href="#">Appointment<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 02</h6>
                        </div>
                        <h3>Ordering<br> Your Equipments</h3>
                        <p> Pleasures to secure other greater or else worse endures pains avoid. </p>
                        <div class="button">
                            <a class="btn-two" href="#">Our Products<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="single-working-process text-center">
                        <div class="top-box">
                            <h6>Step<br> 03</h6>
                        </div>
                        <h3>Solar<br> Panel Installation</h3>
                        <p>Indignations and dislikes men who are so demoralized by the charms.</p>
                        <div class="button">
                            <a class="btn-two" href="#">Appointment<span class="icon-null"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Process-->


                </div>
            </div>
        </div>
    </div>
</section>
<!--End Working Process Area-->


<!--Start latest blog area-->
<section class="latest-blog-area">
    <div class="container inner-content">
        <div class="sec-title">
            <p>News & Updates</p>
            <div class="title">Story From Our Blog</div>
            <div class="border-box"></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="blog-carousel owl-carousel owl-theme">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/images/blog/v1-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3><span>Jan</span><br> 31</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Rising Oil Price Should Re-Focus US On Solar Energy Growth</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#"><b>Rubin Santro</b></a></li>
                                    <li><a href="#">Environment</a></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <p>Same as saying through shrinking from toil & pain these cases perfectly simple...</p>
                                <a class="btn-two" href="#">Read More<span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/images/blog/v1-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3><span>Jan</span><br> 06</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Tax and Duties Are Acting As Road Block for Power for All!</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#"><b>Richard Antony</b></a></li>
                                    <li><a href="#">Solar System</a></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <p>Our power of choice is untrammelled and do when nothing prevents all our being...</p>
                                <a class="btn-two" href="#">Read More<span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/images/blog/v1-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3><span>Dec</span><br> 29</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">A Decline in Solar Growth: Root Cause Analysis</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#"><b>Rubin Santro</b></a></li>
                                    <li><a href="#">Environment</a></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <p>Frequently occur that pleasures have to be all repudiated & annoyances accepted...</p>
                                <a class="btn-two" href="#">Read More<span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="/images/blog/v1-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="post-date">
                                <h3><span>Jan</span><br> 06</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Tax and Duties Are Acting As Road Block for Power for All!</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#"><b>Richard Antony</b></a></li>
                                    <li><a href="#">Solar System</a></li>
                                </ul>
                                <div class="author-icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <p>Our power of choice is untrammelled and do when nothing prevents all our being...</p>
                                <a class="btn-two" href="#">Read More<span class="icon-null"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>


        </div>
    </div>
</section>
<!--End latest blog area-->

<!--Start Testimonial Area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title clrwhite text-center">
            <p>Testimonials</p>
            <div class="title">Words From Customers</div>
            <div class="border-box center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/1.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Shelly Johnson</h3>
                                <p><span class="icon-point"></span>California</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->
                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/2.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Cathrine Wagner</h3>
                                <p><span class="icon-point"></span>Los Angeles</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->

                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/1.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Shelly Johnson</h3>
                                <p><span class="icon-point"></span>California</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->
                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/2.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Cathrine Wagner</h3>
                                <p><span class="icon-point"></span>Los Angeles</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->

                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/1.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Shelly Johnson</h3>
                                <p><span class="icon-point"></span>California</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->
                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <img src="/images/testimonial/2.png" alt="Awesome Image">
                        </div>
                        <div class="inner-content">
                            <div class="text-box">
                                <p>Your guys were knowledgeable, experienced, efficient and neat. A true to work with solartech.</p>
                            </div>
                            <div class="client-info">
                                <h3>Cathrine Wagner</h3>
                                <p><span class="icon-point"></span>Los Angeles</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->

                </div>
            </div>
        </div>
        <div class="button text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <a class="btn-three" href="#">Read More Words<span class="icon-null"></span></a>
        </div>
    </div>
</section>
<!--End Testimonial Area-->

<!--Start Consultation Area-->
<section class="consultation-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="consultation-box">
                    <div class="title-box">
                        <h2>Get Free Consultation</h2>
                        <span>Get a free consultation from our experts, Our customer support team help you 24/7, Don’t hesitate.</span>
                    </div>
                    <div class="consultation">
                        <form class="consultation-form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-box">
                                        <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single-box">
                                        <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single-box">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Discuss About</option>
                                            <option>Installation</option>
                                            <option>Maintenance</option>
                                            <option>Monitoring</option>
                                            <option>Consultation</option>
                                            <option>Roof Solution</option>
                                            <option>Inverter Repair</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-box">
                                        <button class="btn-three" type="submit">get In Touch<span class="icon-null"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="consultation-bottom-text text-center">
                        <div class="top"><span>Or</span></div>
                        <div class="inner">
                            <div class="text">
                                <p>Confirm your 10 mins consultation call with our expert team, They will answer your questions.</p>
                            </div>
                            <a class="btn-three" href="#">Schedule for Call<span class="icon-null"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Consultation Area-->

<!--Start Brand area-->
<section class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="brand-items">
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/1.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/1-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/2.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/2-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/3-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/4.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/4-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <a href="#"><img src="/images/brand/5.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-box">
                            <a href="#"><img src="/images/brand/5-hover.png" alt="Awesome Brand Image"></a>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->

<!--Start Download Material area-->
<section class="download-material-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="download-material">
                    <div class="title-box float-left">
                        <h3>Power Your Home with Innovative Energy Technologies.</h3>
                    </div>
                    <div class="button float-right">
                        <a href="#">
                            <div class="icon">
                                <span class="icon-download"></span>
                            </div>
                            <div class="title">
                                <h4>Download Material</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Download Material area-->
