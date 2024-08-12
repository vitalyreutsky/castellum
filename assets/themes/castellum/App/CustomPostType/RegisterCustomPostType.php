<?php

namespace App\CustomPostType;

class RegisterCustomPostType
{
    public function __construct()
    {
        add_action('init', [self::class, 'registerProductsShortType']);
        add_action('init', [self::class, 'registerProductsType']);
    }

    public static function registerProductsType(): void
    {
        register_post_type('products', array(
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Product',
                'edit_item' => 'Edit Product',
                'new_item' => 'New Product',
                'view_item' => 'View Product',
                'search_items' => 'Search Product',
                'not_found' => 'Product not found',
                'not_found_in_trash' => 'Not found Product in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Products'
            ),
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
            <path d="M58.9836 3.12558H47.0697V11.9144C47.0697 13.5338 45.7594 14.8441 44.14 14.8441C42.5207 14.8441 41.2103 13.5338 41.2103 11.9144V3.12558H29.2965C27.6771 3.12558 26.3668 4.43593 26.3668 6.05527V32.4221H61.9133V6.05507C61.9133 4.43593 60.6029 3.12558 58.9836 3.12558ZM99.6898 22.3228C98.966 20.8752 97.2037 20.2973 95.7588 21.0125L87.2789 25.2525C84.2834 26.7518 82.4209 29.7643 82.4209 33.1146V73.4375H5.85937C2.62324 73.4375 0 76.0607 0 79.2969C0 82.5326 2.62324 85.1562 5.85937 85.1562H6.39902C6.0707 86.0771 5.85937 87.0539 5.85937 88.0859C5.85937 92.9324 9.80195 96.8748 14.6484 96.8748C19.4949 96.8748 23.4373 92.9322 23.4373 88.0859C23.4373 87.0539 23.226 86.0771 22.8977 85.1562H65.3826C65.0543 86.0771 64.843 87.0539 64.843 88.0859C64.843 92.9324 68.7855 96.8748 73.632 96.8748C78.4785 96.8748 82.4209 92.9322 82.4209 88.0859C82.4209 87.0539 82.2096 86.0771 81.8812 85.1562H82.4209C85.657 85.1562 88.2803 82.5326 88.2803 79.2969V33.1148C88.2803 31.9961 88.9012 30.992 89.8996 30.4941L98.3795 26.2541C99.8271 25.5299 100.414 23.7703 99.6898 22.3228ZM14.6482 91.015C13.0318 91.015 11.7186 89.7018 11.7186 88.0853C11.7186 86.4689 13.0318 85.1557 14.6482 85.1557C16.2646 85.1557 17.5779 86.4687 17.5779 88.0853C17.5779 89.7018 16.2646 91.015 14.6482 91.015ZM73.632 91.015C72.0156 91.015 70.7023 89.7018 70.7023 88.0853C70.7023 86.4689 72.0156 85.1557 73.632 85.1557C75.2484 85.1557 76.5617 86.4687 76.5617 88.0853C76.5615 89.7018 75.2482 91.015 73.632 91.015Z" fill="black"/>
            <path d="M29.2967 38.2814V47.0705C29.2967 48.6898 27.9863 50.0002 26.367 50.0002C24.7477 50.0002 23.4373 48.6898 23.4373 47.0705V38.2814H14.6484C13.0291 38.2814 11.7188 39.5918 11.7188 41.2111V67.5779H41.2105V38.2814H29.2967ZM73.6322 38.2814H64.8432V47.0703C64.8432 48.6896 63.5328 50 61.9135 50C60.2941 50 58.9838 48.6896 58.9838 47.0703V38.2812H47.0699V67.5777H76.5617V41.2109C76.5617 39.5918 75.2514 38.2814 73.6322 38.2814Z" fill="black"/>
            </svg>'),
            'supports' => array('title', 'thumbnail', 'editor', 'author')
        ));
    }

    public static function registerProductsShortType(): void
    {
        register_post_type('products-short', array(
            'labels' => array(
                'name' => 'Products Short',
                'singular_name' => 'Product Short',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new Product Short',
                'edit_item' => 'Edit Product Short',
                'new_item' => 'New Product Short',
                'view_item' => 'View Product Short',
                'search_items' => 'Search Product Short',
                'not_found' => 'Product Short not found',
                'not_found_in_trash' => 'Not found Product Short in trash',
                'parent_item_colon' => '',
                'menu_name' => 'Products Short'
            ),
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'show_in_rest' => false,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M52.025 9.45834C51.4056 9.11392 50.7087 8.93317 50 8.93317C49.2913 8.93317 48.5944 9.11392 47.975 9.45834L17.3542 26.4708L50.0625 46.3833L84.1375 27.3L52.025 9.45834ZM87.5 32.5833L53.125 51.8333V89.9292L85.3583 72.025C86.0075 71.664 86.5484 71.136 86.9249 70.4957C87.3015 69.8555 87.5 69.1261 87.5 68.3833V32.5833ZM46.875 89.9292V51.7542L12.5 30.8333V68.3833C12.5 69.1261 12.6985 69.8555 13.0751 70.4957C13.4516 71.136 13.9925 71.664 14.6417 72.025L46.875 89.9292Z" fill="black"/>
            </svg>'),
            'supports' => array('title', 'thumbnail', 'editor', 'author')
        ));
    }
}
