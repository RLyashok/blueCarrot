<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="/" class="logo"></a>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="#" class="menu__link">Case studies</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">Animated marketing videos</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">E-learning development</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">About us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>