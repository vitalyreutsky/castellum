<?php

namespace App\Acf\Blocks;

final class Init
{
	/**
	 * @var Helpers\BlockItem[]
	 */
	private static array $blocks = array(
		General\Hero::class,
		General\Mission::class,
		General\Offers::class,
		General\Contacts::class,
		General\ContentBlock::class,
		General\HeroAdvertisers::class,
		General\Solutions::class,
		General\Advantages::class,
		General\Steps::class,
		General\Reviews::class,
		General\HeroRewards::class,
		General\ProductsList::class,
		General\ProductsShortList::class,
		General\Traffic::class,
		General\HeroAffiliates::class,
		General\Benefits::class,
		General\SimpleCards::class,
		General\Statistics::class,
		General\SignIn::class,
		General\SignUp::class
	);

	public function __construct()
	{
		/*
		** More info about acf bocks here: https://www.advancedcustomfields.com/resources/acf_register_block_type/
		*/
		foreach (self::$blocks as $block) {
			$block::setBlockParams();
		}
		RegisterBlock::init();
	}
}
