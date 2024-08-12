<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class SignUp implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'sign up',
                'Sign Up Block',
                'Sign Up block',
                'templates/blocks/sign-up.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Sign Up block",
                    'description' => "Sign Up block"
                ),
                'block-default',
                'castellum'
            )
        );
    }
}
