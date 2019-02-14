<?php

use App\Entities\Models\ManeColor;
use App\Entities\Models\ManeShape;
use App\Entities\Models\Price;
use Illuminate\Database\Seeder;

class ManesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mane shapes
        $mane_shapes = [
			'Normal' => [
				'name' => 'Normal',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Scarce' => [
				'name' => 'Scarce',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Thick' => [
				'name' => 'Thick',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Barbary' => [
				'name' => 'Barbary',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Crested' => [
				'name' => 'Crested',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Heavy' => [
				'name' => 'Heavy',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Katanga' => [
				'name' => 'Katanga',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Razor' => [
				'name' => 'Razor',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Regal' => [
				'name' => 'Regal',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Regent' => [
				'name' => 'Regent',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Sideburn' => [
				'name' => 'Sideburn',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Sideward' => [
				'name' => 'Sideward',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Transvaal' => [
				'name' => 'Transvaal',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Tufted' => [
				'name' => 'Tufted',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Wavy' => [
				'name' => 'Wavy',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Pariah' => [
				'name' => 'Pariah',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Royal' => [
				'name' => 'Royal',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Savage' => [
				'name' => 'Savage',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Tsavo' => [
				'name' => 'Tsavo',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Blade' => [
				'name' => 'Blade',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Diabolic' => [
				'name' => 'Diabolic',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Hellraiser' => [
				'name' => 'Hellraiser',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
        ];

        // mane colors
        $mane_colors = [
			'Brown' => [
				'name' => 'Brown',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Caramel' => [
				'name' => 'Caramel',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Chocolate' => [
				'name' => 'Chocolate',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Cream' => [
				'name' => 'Cream',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Cream Darker' => [
				'name' => 'Cream Darker',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Cream Lighter' => [
				'name' => 'Cream Lighter',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Dark Brown' => [
				'name' => 'Dark Brown',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Dark Fawn' => [
				'name' => 'Dark Fawn',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Dark Golden' => [
				'name' => 'Dark Golden',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Deep Fawn' => [
				'name' => 'Deep Fawn',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Dove Gray' => [
				'name' => 'Dove Gray',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Fawn' => [
				'name' => 'Fawn',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Khaki' => [
				'name' => 'Khaki',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Light Cream' => [
				'name' => 'Light Cream',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Light Golden' => [
				'name' => 'Light Golden',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Mongoose' => [
				'name' => 'Mongoose',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Rosy Brown' => [
				'name' => 'Rosy Brown',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Savannah' => [
				'name' => 'Savannah',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Sienna' => [
				'name' => 'Sienna',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Sundust' => [
				'name' => 'Sundust',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Sunflower' => [
				'name' => 'Sunflower',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Zer' => [
				'name' => 'Zer',
				'image' => '',
				'rarity' => 'common',
				'price' => [
					'sb_price' => 0,
					'gb_price' => 0,
				],
			],
			'Almond' => [
				'name' => 'Almond',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Amber' => [
				'name' => 'Amber',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Anjeer' => [
				'name' => 'Anjeer',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Ashen' => [
				'name' => 'Ashen',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Auburn' => [
				'name' => 'Auburn',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Beige' => [
				'name' => 'Beige',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Black' => [
				'name' => 'Black',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Blonde' => [
				'name' => 'Blonde',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Brass' => [
				'name' => 'Brass',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Cameo' => [
				'name' => 'Cameo',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Champagne' => [
				'name' => 'Champagne',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Chartreux' => [
				'name' => 'Chartreux',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Chestnut' => [
				'name' => 'Chestnut',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Copper' => [
				'name' => 'Copper',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Deira' => [
				'name' => 'Deira',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Dikela' => [
				'name' => 'Dikela',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Doubloon' => [
				'name' => 'Doubloon',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Dun' => [
				'name' => 'Dun',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Fallow' => [
				'name' => 'Fallow',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Flint' => [
				'name' => 'Flint',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Ginger' => [
				'name' => 'Ginger',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Goldenrod' => [
				'name' => 'Goldenrod',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Gray' => [
				'name' => 'Gray',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Henna' => [
				'name' => 'Henna',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Jacinthe' => [
				'name' => 'Jacinthe',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Jet' => [
				'name' => 'Jet',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Korat' => [
				'name' => 'Korat',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Mahogany' => [
				'name' => 'Mahogany',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Maltese' => [
				'name' => 'Maltese',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Nacarat' => [
				'name' => 'Nacarat',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Obsidian' => [
				'name' => 'Obsidian',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Ochre' => [
				'name' => 'Ochre',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Onyx' => [
				'name' => 'Onyx',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Pecan' => [
				'name' => 'Pecan',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Persimmon' => [
				'name' => 'Persimmon',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Pewter' => [
				'name' => 'Pewter',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Redwood' => [
				'name' => 'Redwood',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Ruddy' => [
				'name' => 'Ruddy',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Russet' => [
				'name' => 'Russet',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Rust' => [
				'name' => 'Rust',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Saffron' => [
				'name' => 'Saffron',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Sandy' => [
				'name' => 'Sandy',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Shedua' => [
				'name' => 'Shedua',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Silver' => [
				'name' => 'Silver',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Silver Gray' => [
				'name' => 'Silver Gray',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Sorrel' => [
				'name' => 'Sorrel',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Steele' => [
				'name' => 'Steele',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Sterling' => [
				'name' => 'Sterling',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Tan' => [
				'name' => 'Tan',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Tawny' => [
				'name' => 'Tawny',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Vandal' => [
				'name' => 'Vandal',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Vanilla' => [
				'name' => 'Vanilla',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Walnut' => [
				'name' => 'Walnut',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'White' => [
				'name' => 'White',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Zarasa' => [
				'name' => 'Zarasa',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Zarbanu' => [
				'name' => 'Zarbanu',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Zarin' => [
				'name' => 'Zarin',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Zivar' => [
				'name' => 'Zivar',
				'image' => '',
				'rarity' => 'custom',
				'price' => [
					'sb_price' => 5,
					'gb_price' => 0,
				],
			],
			'Cairngorm' => [
				'name' => 'Cairngorm',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Citrine' => [
				'name' => 'Citrine',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Cocoa' => [
				'name' => 'Cocoa',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Ebony' => [
				'name' => 'Ebony',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Fiery' => [
				'name' => 'Fiery',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Fulvous' => [
				'name' => 'Fulvous',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Lilac' => [
				'name' => 'Lilac',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Madagascar' => [
				'name' => 'Madagascar',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Pearl' => [
				'name' => 'Pearl',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Prune' => [
				'name' => 'Prune',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Qahir' => [
				'name' => 'Qahir',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Sepia' => [
				'name' => 'Sepia',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Slate' => [
				'name' => 'Slate',
				'image' => '',
				'rarity' => 'breed',
				'price' => [
					'sb_price' => 25,
					'gb_price' => 0,
				],
			],
			'Angelic' => [
				'name' => 'Angelic',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Arctic' => [
				'name' => 'Arctic',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Ardor' => [
				'name' => 'Ardor',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Aufeis' => [
				'name' => 'Aufeis',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Blazing' => [
				'name' => 'Blazing',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Bloodbourne' => [
				'name' => 'Bloodbourne',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Celestial' => [
				'name' => 'Celestial',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Cloudburst' => [
				'name' => 'Cloudburst',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Demonic' => [
				'name' => 'Demonic',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Ethereal' => [
				'name' => 'Ethereal',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Fossil' => [
				'name' => 'Fossil',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Glacial' => [
				'name' => 'Glacial',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Hallowed' => [
				'name' => 'Hallowed',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Hematite' => [
				'name' => 'Hematite',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Ice' => [
				'name' => 'Ice',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Infernal' => [
				'name' => 'Infernal',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Manakbir' => [
				'name' => 'Manakbir',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Maroon' => [
				'name' => 'Maroon',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Moonstone' => [
				'name' => 'Moonstone',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Nuummite' => [
				'name' => 'Nuummite',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Opal' => [
				'name' => 'Opal',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Parhelion' => [
				'name' => 'Parhelion',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Penumbra' => [
				'name' => 'Penumbra',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Rhodonite' => [
				'name' => 'Rhodonite',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Sidereal' => [
				'name' => 'Sidereal',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Skyward' => [
				'name' => 'Skyward',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Supernal' => [
				'name' => 'Supernal',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
			'Unholy' => [
				'name' => 'Unholy',
				'image' => '',
				'rarity' => 'applicator',
				'price' => [
					'sb_price' => 10,
					'gb_price' => 0,
				],
			],
        ];

        // empty table(s)
        ManeShape::truncate();
        ManeColor::truncate();

        // loop through mane shapes
        foreach($mane_shapes as $_mane_shape)
        {
			// create new mane shape
			$mane_shape = ManeShape::create([
				'name' => $_mane_shape['name'],
				'image' => $_mane_shape['image'],
				'rarity' => $_mane_shape['rarity'],
			]);

			// create the price
			$price = Price::create([
				'gene_type' => ManeShape::class,
				'gene_id' => $mane_shape->id,
				'sb_price' => $_mane_shape['price']['sb_price'],
				'gb_price' => $_mane_shape['price']['gb_price'],
			]);
        }

        // loop through mane colors
        foreach($mane_colors as $_mane_color)
        {
			// create new mane color
			$mane_color = ManeColor::create([
				'name' => $_mane_color['name'],
				'image' => $_mane_color['image'],
				'rarity' => $_mane_color['rarity'],
			]);

			// create the price
			$price = Price::create([
				'gene_type' => ManeColor::class,
				'gene_id' => $mane_color->id,
				'sb_price' => $_mane_color['price']['sb_price'],
				'gb_price' => $_mane_color['price']['gb_price'],
			]);
        }
    }
}
