<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Importando os icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        <div class="sqr_red"></div>
        <section class="navbar">
            <div class="logotype">
                <img src="<?php echo asset('/images/brandpersona_marca.png')?>" alt="BrandPersona logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#porque">Por que Brand Persona</a></li>
                    <li><a href="#mercado">O mercado</a></li>
                    <li><a href="#vantagens">Vantagens</a></li>
                    <li><a href="#como-funciona">Como funciona</a></li>
                    <li><a href="#combo">O combo</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
            <div class="nav-inner-container"><i class='bx bx-menu menu-button'></i></div> 
        </section>
        <div class="sqr4"></div>
        <div class="image_container">
                <img src="<?php echo asset('/images/pose_1.png') ?>" alt="Mulher pose 1">
        </div>
        <div class="sqr"></div>
        <section class="home">
            <div class="aux"></div>
            <div class="home_content">
                <p class="mk-p">leve sua empresa para a nova realidade digital</p>
                <h2 class="pt-p">A sua persona virtual <br>com alta performance</h2>
                <p class="mk-p">
                    Para marcas inovadoras: Brand Persona PYXYS + Ilustraria  é o primeiro combo do Brasil
                    de construção de avatares 3D, com tecnologia de ponta em computação gráfica, combinada à mais completa Estratégia de  Content, Growth e Performance Data-driven
                </p>
                <button class="pt-p">Quero Saber mais</button>

                <div class="partners">
                    <p class="ct-p">Um produto: </p>
                    <img src="<?php echo asset('/images/pyxys_logo.png')?>" alt="PYXYS logo">
                    <img src="<?php echo asset('/images/ilustraria_logo.jpg')?>" alt="Ilustraria logo">
                </div>
            </div>
        </section>
        <div class="sqr2"></div>
    </header>
    <div class="scroll_top_wrapper" onclick="backToTop()">
        <p>back</p>
    </div>