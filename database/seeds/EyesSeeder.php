<?php

use App\Entities\Models\Eye;
use App\Entities\Models\Price;
use Illuminate\Database\Seeder;

class EyesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // eyes
        $eyes = [
			'Amber' => [
				'name' => 'Amber',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Black' => [
				'name' => 'Black',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Brown' => [
				'name' => 'Brown',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Olive' => [
				'name' => 'Olive',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Tan' => [
				'name' => 'Tan',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Yellow' => [
				'name' => 'Yellow',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Albinoid' => [
				'name' => 'Albinoid',
				'image' => '',
				'rarity' => 'exclusive',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Glass' => [
				'name' => 'Glass',
				'image' => '',
				'rarity' => 'exclusive',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Mosaic' => [
				'name' => 'Mosaic',
				'image' => '',
				'rarity' => 'exclusive',
				'gained' => 'ncl',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Blue' => [
				'name' => 'Blue',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Crimson' => [
				'name' => 'Crimson',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Green' => [
				'name' => 'Green',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Grey' => [
				'name' => 'Grey',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Jet' => [
				'name' => 'Jet',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Pink' => [
				'name' => 'Pink',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sandy' => [
				'name' => 'Sandy',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'White' => [
				'name' => 'White',
				'image' => '',
				'rarity' => 'common',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Aqua' => [
				'name' => 'Aqua',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Bronze' => [
				'name' => 'Bronze',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Cognac' => [
				'name' => 'Cognac',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Crystal' => [
				'name' => 'Crystal',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Cucumber' => [
				'name' => 'Cucumber',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Denim' => [
				'name' => 'Denim',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Earth' => [
				'name' => 'Earth',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Emerald' => [
				'name' => 'Emerald',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Hazel' => [
				'name' => 'Hazel',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Hetero Black & White' => [
				'name' => 'Hetero Black & White',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Hetero Blue & Brown' => [
				'name' => 'Hetero Blue & Brown',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Hetero Blue & Green' => [
				'name' => 'Hetero Blue & Green',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Hetero Brown & Blue' => [
				'name' => 'Hetero Brown & Blue',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Hetero Green & Blue' => [
				'name' => 'Hetero Green & Blue',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Hetero White & Black' => [
				'name' => 'Hetero White & Black',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 150,
					'gb_price' => 0,
				],
			],
			'Ice' => [
				'name' => 'Ice',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Jade' => [
				'name' => 'Jade',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Malachite' => [
				'name' => 'Malachite',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Mint' => [
				'name' => 'Mint',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Paradise' => [
				'name' => 'Paradise',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Peach' => [
				'name' => 'Peach',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Red' => [
				'name' => 'Red',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Saffron' => [
				'name' => 'Saffron',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sage' => [
				'name' => 'Sage',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sapphire' => [
				'name' => 'Sapphire',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Seafoam' => [
				'name' => 'Seafoam',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Silver' => [
				'name' => 'Silver',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sinoper' => [
				'name' => 'Sinoper',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Smoke' => [
				'name' => 'Smoke',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sodalite' => [
				'name' => 'Sodalite',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Storm' => [
				'name' => 'Storm',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sunburst' => [
				'name' => 'Sunburst',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sunset' => [
				'name' => 'Sunset',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sunstone' => [
				'name' => 'Sunstone',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Tyrian' => [
				'name' => 'Tyrian',
				'image' => '',
				'rarity' => 'special',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Dawn' => [
				'name' => 'Dawn',
				'image' => '',
				'rarity' => 'event',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Draconid' => [
				'name' => 'Draconid',
				'image' => '',
				'rarity' => 'event',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Starshine' => [
				'name' => 'Starshine',
				'image' => '',
				'rarity' => 'event',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sunglow' => [
				'name' => 'Sunglow',
				'image' => '',
				'rarity' => 'event',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Sectoral Amber & Ice' => [
				'name' => 'Sectoral Amber & Ice',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Sectoral Brown & Blue' => [
				'name' => 'Sectoral Brown & Blue',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Sectoral Green & Blue' => [
				'name' => 'Sectoral Green & Blue',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Sectoral Ice & Green' => [
				'name' => 'Sectoral Ice & Green',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Sectoral Red & Jet' => [
				'name' => 'Sectoral Red & Jet',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Sectoral Yellow & Green' => [
				'name' => 'Sectoral Yellow & Green',
				'image' => '',
				'rarity' => 'breed',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 200,
					'gb_price' => 0,
				],
			],
			'Amethyst' => [
				'name' => 'Amethyst',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Bismuth' => [
				'name' => 'Bismuth',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Fire Opal' => [
				'name' => 'Fire Opal',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Garnet' => [
				'name' => 'Garnet',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Indigo' => [
				'name' => 'Indigo',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Jasper' => [
				'name' => 'Jasper',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Lavender' => [
				'name' => 'Lavender',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Midnight' => [
				'name' => 'Midnight',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Nebula' => [
				'name' => 'Nebula',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Opal' => [
				'name' => 'Opal',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Peacock' => [
				'name' => 'Peacock',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Peridot' => [
				'name' => 'Peridot',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Richat' => [
				'name' => 'Richat',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Violet' => [
				'name' => 'Violet',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
			'Zoisite' => [
				'name' => 'Zoisite',
				'image' => '',
				'rarity' => 'applicator',
				'gained' => 'custom',
				'price' => [
					'sb_price' => 100,
					'gb_price' => 0,
				],
			],
        ];

        // empty table(s)
        Eye::truncate();

        // loop through eyes
        foreach($eyes as $_eye)
        {
			// create new eye
			$eye = Eye::create([
				'name' => $_eye['name'],
				'image' => $_eye['image'],
				'rarity' => $_eye['rarity'],
				'gained' => $_eye['gained'],
			]);

			// create the price
			$price = Price::create([
				'gene_type' => Eye::class,
				'gene_id' => $eye->id,
				'sb_price' => $_eye['price']['sb_price'],
				'gb_price' => $_eye['price']['gb_price'],
			]);
        }
    }
}
