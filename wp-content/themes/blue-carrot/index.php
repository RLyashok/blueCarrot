<?php
/*
Template Name: Home Page
*/

use Timber\Timber;
use Timber\Post;

$context = Timber::context();
$context['accordion_items'] = get_field('accordion_items'); // Отримання даних із Flexible Content
$context['cyf_page_title'] = get_field('page_title'); // Отримання даних із Flexible Content

Timber::render('index.twig', $context);
