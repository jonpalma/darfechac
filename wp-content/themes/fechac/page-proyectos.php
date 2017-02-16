<?php get_header(); ?>
<div class="wrapper">
    <section class="proyectos" id="proyectos">
        <div class="text-center container">
            <h1 class="heading black">Proyectos</h1>
            <div class="divider"></div>
            <div class="modal-open">
                <?php
                $arrayProyectos = CFS()->get('proyectos_array');
                $arrayEnd = end($arrayProyectos);
                $counter = 0;
                foreach( $arrayProyectos as $proyecto ) {
                    if($counter == 0 || $counter%3 == 0) {
                        echo '<div class="row no-margin">';
                    }
                ?>
                <div class="col-sm-4">
                    <a href="#proyecto-modal-<?php echo $counter;?>" data-toggle="modal" data-target="#proyecto-modal-<?php echo $counter;?>">
                        <img class="center-block img-responsive" src="<?php echo $proyecto['logo']?>" alt="Logo Proyecto">
                        <button class="btn white-btn relative-align">Ver Proyecto</button>
                    </a>
                </div>
                <?php
                    $counter++;
                    if($counter%3 == 0 || $alianza == $arrayEnd) {
                        echo '</div>';
                    }
                }
                ?>
                <div class="col-sm-12">
                    <a href="index.php#videos-section" class="btn gray-btn">Estas son sólo algunas propuestas que tenemos, contamos con cientos de proyectos más, contáctanos para conocerlos.</a>
                </div>
            </div>
            <?php
            $arrayProyectos = CFS()->get('proyectos_array');
            $arrayEnd = end($arrayProyectos);
            $counter = 0;
            foreach( $arrayProyectos as $proyecto ) {
            ?>
            <div class="modal fade" id="proyecto-modal-<?php echo $counter;?>" role="dialog" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $proyecto['banner']?>" alt="ADN" class="banner">
                        </div>
                        <div class="modal-body">
                            <h3><?php echo $proyecto['title']?></h3>
                            <p class="text light-text text-justify">
                                <?php echo $proyecto['description']?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <?php
                $galleryArray = $proyecto['galeria_array'];
                $galleryArrayEnd = end($galleryArray);
                $gallery_counter = 0;
                foreach( $galleryArray as $foto ) {
                    if($gallery_counter == 0 || $gallery_counter%3 == 0) {
                        echo '<div class="row no-margin">';
                    }
                            ?>
                            <div class="col-sm-4">
                                <img src="<?php echo $foto['img'];?>" alt="Foto Galería" class="center-block img-responsive">
                            </div>
                            <?php
                    $gallery_counter++;
                    if($gallery_counter%3 == 0 || $alianza == $galleryArrayEnd) {
                        echo '</div>';
                    }
                }
                            ?>

                            <div class="row no-margin text-center">
                                <div class="col-sm-6">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                        <input type="hidden" name="cmd" value="_donations">
                                        <input type="hidden" name="hosted_button_id" value="4P3G84L2DB3P2">
                                        <input type="hidden" name="lc" value="MXN">
                                        <input type="hidden" name="business" value="fechac@fechac.org.mx">
                                        <input type="hidden" name="item_name" value="Fundación del Empresariado Chihuahuense, A.C."><br>
                                        <input type="hidden" name="item_name" value="Donativo <?php echo $proyecto['donation_id'];?>">
                                        <input type="submit" class="btn gray-btn" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea." value="DONATIVO ÚNICO">
                                        <table class="full-width">
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="on0" value="Donativo"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="amount" class="paypal-input">
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
                                <div class="col-sm-6">
                                    <form id="form_paypal_rec" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                        <input name="cmd" value="_xclick-subscriptions" type="hidden">
                                        <input type="hidden" name="business" value="fechac@fechac.org.mx">
                                        <input type="hidden" name="item_name" value="Fundación del Empresariado Chihuahuense, A.C."><br>
                                        <input name="item_name" value="Donacion Recurrente <?php echo $proyecto['donation_id'];?>" type="hidden">
                                        <input name="no_shipping" value="1" type="hidden">
                                        <input name="no_no te" value="1" type="hidden">
                                        <input name="currency_code" value="MXN" type="hidden">
                                        <input name="p3" value="1" type="hidden">
                                        <input name="src" value="1" type="hidden">
                                        <input name="sra" value="1" type="hidden">
                                        <input name="t3" value="M" type="hidden"> 
                                        <input type="submit" class="btn gray-btn" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea." value="DONATIVO RECURRENTE">
                                        <table class="full-width">
                                            <tr>
                                                <td>
                                                    <input type="text" name="a3" class="paypal-input"> 
                                                </td>
                                            </tr>
                                        </table>	
                                        <img alt="" border="0" src=https://www.paypalobjects.com/es_XC/i/scr/pixel.gif width="1" height="1"> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $counter++;
            }
            ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>