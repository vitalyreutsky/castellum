<!DOCTYPE html>
<html lang="<?php echo ICL_LANGUAGE_CODE == 'de' ? 'de' : 'en'; ?>">

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="page__body <?php echo App\Helpers\Init::get_template_page(); ?>">
        <?php get_template_part('templates/layout/header'); ?>