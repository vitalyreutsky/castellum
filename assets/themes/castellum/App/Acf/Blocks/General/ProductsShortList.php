<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ProductsShortList implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'products-short-list',
                'Products Short list Block',
                'Products Short list block',
                'templates/blocks/products-short-list.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Products Short list block",
                    'description' => "Products Short list block"
                ),
                'block-default',
                'castellum'
            )
        );
    }
}
