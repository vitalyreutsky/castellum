<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HeroAdvertisers implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'hero advertisers',
                'Hero Advertisers Block',
                'Hero Advertisers block',
                'templates/blocks/hero-advertisers.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Hero Advertisers block",
                    'description' => "Hero Advertisers block"
                ),
                'block-default',
                'castellum'
            )
        );
    }
}
