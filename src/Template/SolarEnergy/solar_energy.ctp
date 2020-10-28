
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title float-left">
                            <h1>Como Funciona</h1>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="/">Início</a></li>
                                <li class="active">Como Funciona</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start WhoWe Are Area-->
    <section class="whowe-are-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>SOLAYRIZ SLZ ENGENHARIA</p>
                <div class="title"> <?= $solar->title ?></div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="company-info-box">
                    <?= $solar->description ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image" style="border: 1px solid #6688a2;">
                    <img src="<?= "/files/SolarEnergy/photo/" . $solar->photo ?>" alt="Awesome Image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="whowe-are-image" style="border: 1px solid #6688a2;">
                        <img src="<?= "/files/SolarEnergy/photo2/" . $solar->photo2 ?>" alt="Awesome Image">
                    </div>
                </div>
            </div>

<!--            start vantagens-->


            <div class="row whowe-are">

                <div class="sec-title text-center" style="width: 100%">
                    <p>SOLAYRIZ SLZ ENGENHARIA</p>
                    <div class="title">Vantagens da energia solar</div>
                    <div class="border-box center"></div>
                </div>


                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">01</div>
                        <div class="icon">
                            <span class="icon-null-2"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal1" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage  ?></h3>
                            <?= strlen($solar->advantage ) >  120 ? substr($solar->advantage , 0, 120) . "..." : $solar->advantage ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">02</div>
                        <div class="icon">
                            <span class="icon-null-3"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal2" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage2  ?></h3>
                                <?= strlen($solar->advantage2 ) >  120 ? substr($solar->advantage2 , 0, 120) . "..." : $solar->advantage2 ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
                <!--Start Single Whowe Are Box-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">03</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage3  ?></h3>
                                <?= strlen($solar->advantage3 ) >  120 ? substr($solar->advantage3 , 0, 120) . "..." : $solar->advantage3 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">04</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage4  ?></h3>
                                <?= strlen($solar->advantage4 ) >  120 ? substr($solar->advantage4 , 0, 120) . "..." : $solar->advantage4 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">05</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage5  ?></h3>
                                <?= strlen($solar->advantage5 ) >  120 ? substr($solar->advantage5 , 0, 120) . "..." : $solar->advantage5 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">06</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage6  ?></h3>
                                <?= strlen($solar->advantage6 ) >  120 ? substr($solar->advantage6 , 0, 120) . "..." : $solar->advantage6 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">07</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage7  ?></h3>
                                <?= strlen($solar->advantage7 ) >  120 ? substr($solar->advantage7 , 0, 120) . "..." : $solar->advantage7 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">08</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage8  ?></h3>
                                <?= strlen($solar->advantage8 ) >  120 ? substr($solar->advantage8 , 0, 120) . "..." : $solar->advantage8 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">09</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage9  ?></h3>
                                <?= strlen($solar->advantage9 ) >  120 ? substr($solar->advantage9 , 0, 120) . "..." : $solar->advantage9 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">10</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage10  ?></h3>
                                <?= strlen($solar->advantage10 ) >  120 ? substr($solar->advantage10 , 0, 120) . "..." : $solar->advantage10 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">11</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage11  ?></h3>
                                <?= strlen($solar->advantage11 ) >  120 ? substr($solar->advantage11 , 0, 120) . "..." : $solar->advantage11 ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-whowe-are-box text-center">
                        <div class="count-box">12</div>
                        <div class="icon">
                            <span class="icon-career"></span>
                        </div>
                        <div class="text">
                            <a href="#exampleModal3" data-toggle="modal" style="color: #83888d">
                                <h3><?= $solar->title_advantage12 ?></h3>
                                <?= strlen($solar->advantage12 ) >  120 ? substr($solar->advantage12 , 0, 120) . "..." : $solar->advantage12 ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Whowe Are Box-->
            </div>

            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage2 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage2 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage3 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage3 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage4 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage4 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage5 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage5 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage6 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage6 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage7 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage7 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage8 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage8 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage9 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage9 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage10 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage10 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage11 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage11 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?= $solar->title_advantage12 ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $solar->advantage12 ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End WhoWe Are Area-->
    <!--            end vantagens-->

<!--    start energia solar-->
    <section class="team-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>SOLAYRIZ SLZ ENGENHARIA</p>
                <div class="title">Energia solar para</div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel owl-theme">
                        <!--Start single item member-->

                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img class="prj" src="<?= "/files/SolarEnergy/photo3/" . $solar->photo3 ?>" alt="Awesome Image">
                                </div>
                                <div class="name text-center">
                                    <h3><?= $solar->para ?></h3>
                                </div>

                                <div class="name text-center overlay-content">
                                    <h3><?= $solar->para ?></h3>
                                    <ul class="sociallinks">
                                        <div class="btn-box">
                                            <a class="btn-one" href="#para" data-toggle="modal"><b>Ver mais</b><span class="icon-null"></span></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>

                         <div class="single-team-member">
                            <div class="img-holder">
                                <img class="prj" src="<?= "/files/SolarEnergy/photo4/" . $solar->photo4 ?>" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3><?= $solar->for2 ?></h3>
                            </div>

                            <div class="name text-center overlay-content">
                                <h3><?= $solar->for2 ?></h3>
                                <ul class="sociallinks">
                                    <div class="btn-box">
                                        <a class="btn-one"  href="#for2" data-toggle="modal"><b>Ver mais</b><span class="icon-null"></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="single-team-member">
                            <div class="img-holder">
                                <img class="prj" src="<?= "/files/SolarEnergy/photo5/" . $solar->photo5 ?>" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3><?= $solar->for3 ?></h3>
                            </div>

                            <div class="name text-center overlay-content">
                                <h3><?= $solar->for3 ?></h3>
                                <ul class="sociallinks">
                                    <div class="btn-box">
                                        <a class="btn-one"  href="#for3" data-toggle="modal"><b>Ver mais</b><span class="icon-null"></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="single-team-member">
                            <div class="img-holder">
                                <img class="prj" src="<?= "/files/SolarEnergy/photo6/" . $solar->photo6 ?>" alt="Awesome Image">
                            </div>
                            <div class="name text-center">
                                <h3><?= $solar->for4 ?></h3>
                            </div>

                            <div class="name text-center overlay-content">
                                <h3><?= $solar->for4 ?></h3>
                                <ul class="sociallinks">
                                    <div class="btn-box">
                                        <a class="btn-one"  href="#for4" data-toggle="modal"><b>Ver mais</b><span class="icon-null"></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <!--End single item member-->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="para" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#para"><?= $solar->para ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $solar->description_for ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="for2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#para"><?= $solar->para ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $solar->description_for ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="for3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#para"><?= $solar->para ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $solar->description_for ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="for4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#para"><?= $solar->para ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $solar->description_for ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--    end energia solar-->
    <!--Start Choose area-->
    <section class="choose-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="why-whoose-content">
                        <div class="sec-title">
                            <p>Captação Da Energia Solar</p>
                            <div class="title"> <?= $solar->begin ?></div>
<!--                            <div class="title">How to choose<br> better one for your place</div>-->
                            <div class="border-box"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="whychoose-right-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-calculator" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter1" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps ) >  170 ? substr($solar->steps , 0, 170) . "..." : $solar->steps ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-power"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter2" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps2 ) >  170 ? substr($solar->steps2 , 0, 170) . "..." : $solar->steps2 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-save"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter3" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps3 ) >  170 ? substr($solar->steps3 , 0, 170) . "..." : $solar->steps3 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="whychoose-right-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-file" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter4" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps4 ) >  170 ? substr($solar->steps4 , 0, 170) . "..." : $solar->steps4 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-drill" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <a href="#exampleModalCenter" data-toggle="modal">
                                    <div class="title">
                                        <a href="#exampleModalCenter5" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps5 ) >  170 ? substr($solar->steps5 , 0, 170) . "..." : $solar->steps5 ?>
                                    </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-null-1"></span>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="#exampleModalCenter6" data-toggle="modal" style="color: #83888d">
                                        <?= strlen($solar->steps6 ) >  170 ? substr($solar->steps6 , 0, 170) . "..." : $solar->steps6 ?>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Choose area-->


    <!-- Button trigger modal -->
<!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--        Launch demo modal-->
<!--    </button>-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps2 ?>
                </div>
                <div class="modal-footer">
                    < <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background: #f6aa7d">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps3 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps4 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps5 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Instalação Do Sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $solar->steps6 ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>



    <!--Start Fact Counter Area-->
    <section class="fact-counter-area" style="background-image:url(/images/parallax-background/fact-counter-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="fact-counter style2">
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-history" aria-hidden="true"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Experiência comprovada</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-check" aria-hidden="true"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Equipamentos de qualidade</h3>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter style2 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <div class="icon">
                                        <span class="fa fa-users"></span>
                                    </div>
                                </h1>
                                <div class="title">
                                    <h3>Profissionais experientes</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Start Fact Counter Area-->

    <!--Start team area-->
    <section class="team-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>SOLAYRIZ SLZ ENGENHARIA</p>
                <div class="title">Projetos Recentes</div>
                <div class="border-box center"></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel owl-theme">
                        <!--Start single item member-->
                        <?php foreach ($proj as $prj): ?>
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img class="prj" src="<?= "/files/Projects/photo/" . $prj->photo ?>" alt="Awesome Image">
                                </div>
                                <div class="name text-center">
                                    <h3><?= $prj->name ?></h3>
                                </div>

                                <div class="name text-center overlay-content">
                                    <h3><?= $prj->name ?></h3>
                                    <ul class="sociallinks">
                                        <div class="btn-box">
                                            <a class="btn-one" href="/projeto/<?= $prj->id ?>"><b>Ver mais</b><span class="icon-null"></span></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--End single item member-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End team area-->

