<?php get_header(); ?>
<div class="wrapper" id="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="carousel-banner" class="carousel slide banner" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-banner" data-slide-to="1"></li>
            <li data-target="#carousel-banner" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $bannerArray = CFS()->get('banner_array');
            $counter = 0;
            foreach($bannerArray as $banner) {
                if($counter == 0) {
                    echo '<div class="item active">';
                } else {
                    echo '<div class="item">';
                }
                echo '<img class="horizontal-align" src="'.$banner['img'].'" alt="Banner">';
                echo '</div>';
                $counter++;
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ¿QUÉ ES DAR?  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="acerca-de" id="acerca">
        <div class="container spacing full-page">
            <h1 class="heading black text-center">¿QUÉ ES <span class="pink">DAR?</span></h1>
            <div class="divider"></div>
            <div class="row no-margin vertical-align">
                <div class="col-md-7 col-sm-8">
                    <p class="text">
                        <?php echo CFS()->get('dar_text'); ?>
                    </p>
                    <a href="#videos-section" class="smoothScroll gray-btn btn">CONOCE NUESTROS CASOS DE ÉXITO</a>
                </div>
            </div>
            <img class="decoration hidden-xs" src="<?php echo bloginfo('template_url').'/'; ?>img/backgrounds/hand-family.png">
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* VIDEOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="videos-section full-page" id="videos-section">
        <div class="row no-margin videos-row">

            <div class="col-sm-4">
                <div class="spacing-right">
                    <div class="row no-margin">
                        <div class="videos-heading pull-right">
                            <h3 class="black">videos y alianzas<br><span class="pink">dar</span></h3>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="videos-nav">
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-video" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-video" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="text-right btn-container">
                        <a href="#beneficios" class="smoothScroll btn gray-btn">CONOCE LOS BENEFICIOS DE DAR</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div id="carousel-video" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $arrayVideos = CFS()->get('videos_array');
                        $arrayEnd = end($arrayVideos);
                        $counter = 0;
                        foreach( $arrayVideos as $video ) {
                            if($counter == 0 || $counter%2 == 0) {
                                if($counter == 0) {
                                    echo '<div class="item active">';
                                } else {
                                    echo '<div class="item">';
                                }
                                echo '<div class="row no-margin">';
                            }

                        ?>
                        <div class="col-sm-6">
                            <img class="horizontal-align" src="<?php echo $video['img'];?>" alt="Video">
                            <div class="carousel-caption relative-align">
                                <a href="#video-modal-<?php echo $counter;?>" class="open-video" data-toggle="modal" data-target="#video-modal-<?php echo $counter;?>"></a>
                                <h3><?php echo $video['video_title'];?></h3>
                            </div>
                        </div>
                        <?php
                            $counter++;
                            if($counter%2 == 0 || $video == $arrayEnd) {
                                echo '</div></div>';
                            }
                        }
                        ?>
                    </div>

                    <?php
                    $arrayVideos = CFS()->get('videos_array');
                    $arrayEnd = end($arrayVideos);
                    $counter = 0;
                    foreach( $arrayVideos as $video ) {
                    ?>
                    <div class="video-modal modal fade" id="video-modal-<?php echo $counter;?>" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo $video['video'];?>
                                    <button data-dismiss="modal" aria-label="Close" class="center-block btn pink-btn-alt">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $counter++;
                    }
                    ?>

                </div>
            </div>

        </div>

        <div class="associations-row bottom-rows">
            <div id="carousel-associations" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arraySponsors = CFS()->get('patrocinadores_array');
                    $arrayEnd = end($arraySponsors);
                    $counter = 0;
                    foreach( $arraySponsors as $sponsor ) {
                        if($counter == 0 || $counter%5 == 0) {
                            if($counter == 0) {
                                echo '<div class="item active">';
                            } else {
                                echo '<div class="item">';
                            }
                            echo '<div class="col-sm-1"></div>';
                        }
                    ?>
                    <div class="col-sm-2">
                        <img class="img-responsive center-block vertical-align" src="<?php echo $sponsor['img'];?>" alt="Patrocinador">
                    </div>
                    <?php
                        $counter++;
                        if($counter%5 == 0 || $sponsor == $arrayEnd) {
                            echo '<div class="col-sm-1"></div></div>';
                        }
                    }
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-associations" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-associations" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="unete-row bottom-rows">
            <div class="container">
                <div class="col-sm-8">
                    <h1 class="heading white vertical-align">La mejor inversión es DAR</h1>
                </div>
                <div class="col-sm-4">
                    <a href="#unete-modal" data-toggle="modal" data-target="#unete-modal" class="btn white-btn vertical-align">ÚNETE</a>
                </div>
            </div>
        </div>
        <div class="unete-modal modal fade" id="unete-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="black text-center">Si deseas ser parte de esta maravillosa experiencia, mándanos tus datos y nos podremos en contacto contigo a la brevedad.</h3>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode('[contact-form-7 id="103" title="Únete Contacto"]'); ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BENEFICIOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="beneficios" id="beneficios">
        <div class="container spacing full-page text-center">
            <div class="vertical-align">
                <h1 class="heading black">BENEFICIOS <span class="pink">DAR</span></h1>
                <div class="divider"></div>
                <?php
                $arrayBeneficios = CFS()->get('beneficios_array');
                $arrayEnd = end($arrayBeneficios);
                $counter = 0;
                foreach( $arrayBeneficios as $beneficio ) {
                    if($counter == 0 || $counter%3 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-4">
                    <img src="<?php echo $beneficio['img'];?>" alt="Beneficio" class="center-block">
                    <p class="text black">
                        <?php echo $beneficio['text'];?>
                    </p>
                </div>
                <?php
                    $counter++;
                    if($counter%3 == 0 || $beneficio == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PARTICIPAR  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="participar" id="participar">
        <div class="container spacing text-center top-row">
            <h1 class="heading black">CÓMO <span class="pink">PARTICIPAR</span></h1>
            <div class="divider"></div>
            <?php
            $arrayParticipar = CFS()->get('participar_array');
            $arrayEnd = end($arrayParticipar);
            $counter = 0;
            foreach( $arrayParticipar as $paso ) {
                if($counter == 0 || $counter%5 == 0) {
                    echo '<div class="row no-margin">';
                }
            ?>
            <div class="col-5">
                <a href="<?php echo $paso['link'];?>" class="smoothScroll">
                    <img src="<?php echo $paso['img'];?>" alt="Equipo" class="center-block img-responsive">
                </a>
                <p class="text">
                    <?php echo $paso['text'];?>
                </p>
            </div>
            <?php
                $counter++;
                if($counter%5 == 0 || $paso == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
            <a href="#contacto" class="btn gray-btn center-block smoothScroll">CONTÁCTANOS</a>
        </div>
        <div class="bottom-rows" id="donaciones">
            <div class="container">
                <div class="col-sm-6">
                    <h1 class="heading white vertical-align">¿TE GUSTARÍA SER PARTE DE ESTA EXPERIENCIA?</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="col-sm-6 no-padding">
                        <form class="vertical-align" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                            <input type="hidden" name="cmd" value="_donations">
                            <input type="hidden" name="hosted_button_id" value="4P3G84L2DB3P2">
                            <input type="hidden" name="lc" value="MXN">
                            <input type="hidden" name="business" value="fechac@fechac.org.mx">
                            <input type="hidden" name="item_name" value="Fundación del Empresariado Chihuahuense, A.C."><br>
                            <input type="hidden" name="item_name" value="Donativo DAR">
                            <input type="submit" class="btn white-btn" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea." value="DONAR">
                            <table class="full-width">
                                <tr>
                                    <td>
                                        <input type="hidden" name="on0" value="Donativo"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="amount" class="full-width">
                                            <option value="100.00">$100.00 MXN</option>
                                            <option value="200.00">$200.00 MXN</option>
                                            <option value="300.00">$300.00 MXN</option>
                                            <option value="">Ingrese otro monto</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="currency_code" value="MXN">
                        </form>
                    </div>
                    <div class="col-sm-6 no-padding">
                        <a href="http://donate.icfdn.org/#npo/fechac-fund" class="btn white-btn vertical-align" target="_blank">DONATIVOS DEDUCIBLES EN USA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="contacto" id="contacto">
        <div class="container spacing full-page">
            <h1 class="heading pink text-center">CONTACTO</h1>
            <div class="divider"></div>
            <div class="row no-margin vertical-align">
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <?php echo do_shortcode('[contact-form-7 id="102" title="Formulario de Contacto"]'); ?>
                    </div>
                    <div class="col-sm-6">
                        <p class="text">
                            <?php echo CFS()->get('contacto_text'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="map-nav container text-center">
        <h1 class="heading black">Ubicaciones</h1>
        <div class="divider"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2"><a class="btn gray-btn" onclick="moveToChihuahua()">Chihuahua</a></div>
        <div class="col-sm-2"><a class="btn gray-btn" onclick="moveToJuarez()">Juárez</a></div>
        <div class="col-sm-4"></div>
    </nav>
    <section class="googleMap" id="googleMap" position="fechac"></section>
</div>
<?php get_footer(); ?>