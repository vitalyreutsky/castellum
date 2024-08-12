<?php

namespace App\Helpers;

class Init
{
    public function __construct()
    {
        // acf polylang options
        add_filter('bea.aofp.get_default', '__return_false');
        add_filter('acf/load_value/type=text', [self::class, 'text_shortcode'], 10, 3);
        add_filter('body_class', [self::class, 'add_class_for_body']);

        add_shortcode('current_year', [self::class, 'get_current_year']);
    }

    public static function add_class_for_body($classes)
    {
        $classes[] = 'page';

        return $classes;
    }

    public static function get_current_year()
    {
        return date('Y');
    }

    public static function text_shortcode($value)
    {
        if (is_admin()) return $value;
        return do_shortcode($value);
    }

    public static function get_template_page()
    {
        $reward = 'rewards';
        $advertisers = 'advertisers';
        $affiliates = 'affiliates';

        if (is_page_template('page-rewards.php')) {
            return $reward;
        }

        if (is_page_template('page-advertisers.php')) {
            return $advertisers;
        }

        if (is_page_template('page-affiliates.php')) {
            return $affiliates;
        }
    }
}
