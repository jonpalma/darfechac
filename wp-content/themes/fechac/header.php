<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="DAR es el vehículo desarrollado por Fechac para que las organizaciones puedan contribuir a programas sociales mediante estrategias de éxito probado">
        <meta name="keywords" content="DAR,Fechac,Programas Sociales,Donativo,Alto,Rendimiento,Aportaciones Sociales,Objetivos Económicos,Filantropía,Infraestructura,Organización,Comunidad,Socialmente Comprometida">
        <meta name="author" content="Mixen">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothScroll" target="_blank" href="http://www.fechac.org/web/index.php"><img src="<?php echo bloginfo('template_url').'/'; ?>img/logo.png" alt="FECHAC"></a>
                </div>

                <div class="nav-img-container pull-right vertical-align">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/nav/dar.png" alt="DAR">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="<?php if(is_front_page()) { echo 'active'; } ?> vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#wrapper" class="smoothScroll">INICIO <span class="sr-only">(current)</span></a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#acerca" class="smoothScroll">¿QUÉ ES DAR?</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#videos-section" class="smoothScroll">ALIANZAS</a></li>
                        <li class="<?php if(!is_front_page()) { echo 'active'; } ?> vertical-align"><a href="proyectos" class="">PROYECTOS</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#beneficios" class="smoothScroll">BENEFICIOS</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#participar" class="smoothScroll">CÓMO PARTICIPAR</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()) { echo 'index/'; } ?>#contacto" class="smoothScroll">CONTACTO</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>