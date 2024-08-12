<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HeroAffiliates implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'hero affiliates',
                'Hero Affiliates Block',
                'Hero Affiliates block',
                'templates/blocks/hero-affiliates.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Hero Affiliates block",
                    'description' => "Hero Affiliates block"
                ),
                'block-default',
                'castellum'
            )
        );
    }
}
