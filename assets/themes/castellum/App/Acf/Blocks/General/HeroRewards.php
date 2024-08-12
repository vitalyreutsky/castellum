<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HeroRewards implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'hero rewards',
                'Hero Rewards Block',
                'Hero Rewards block',
                'templates/blocks/hero-rewards.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Hero Rewards block",
                    'description' => "Hero Rewards block"
                ),
                'block-default',
                'castellum'
            )
        );
    }
}
