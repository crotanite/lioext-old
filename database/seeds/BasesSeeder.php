<?php

use App\Entities\Models\Base;
use App\Entities\Models\Price;
use Illuminate\Database\Seeder;

class BasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // bases
        $bases =
        [
			'Black'  =>
			[
				'Countershaded'  =>
				[
					'Dark' =>
					[
						'black' => [
							'name' => 'Black',
							'image' => 'https://i.imgur.com/OcZcdC1.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'dikela' => [
							'name' => 'Dikela',
							'image' => 'https://i.imgur.com/wdSjfT1.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'gray' => [
							'name' => 'Gray',
							'image' => 'https://i.imgur.com/hfwIyj8.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'pewter' => [
							'name' => 'Pewter',
							'image' => 'https://i.imgur.com/GueOps6.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'vandal' => [
							'name' => 'Vandal',
							'image' => 'https://i.imgur.com/jD7hSet.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'korat' => [
							'name' => 'Korat',
							'image' => 'https://i.imgur.com/l9o6azK.png',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'slate' => [
							'name' => 'Slate',
							'image' => 'https://i.imgur.com/eRyuqVQ.png',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'celestial' => [
							'name' => 'Celestial',
							'image' => 'https://i.imgur.com/wc91VGM.png',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 8,
							],
						],
						'divine' => [
							'name' => 'Divine',
							'image' => 'https://i.imgur.com/qVb6fKS.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'elysian' => [
							'name' => 'Elysian',
							'image' => 'https://i.imgur.com/nAvWdr8.png',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'wet season',
								'group_one' => [
									'ice'
								],
								'group_two' => [
									'divine',
									'ebony'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 30,
							],
						],
						'ice' => [
							'name' => 'Ice',
							'image' => 'https://i.imgur.com/rRdIrKQ.png',
							'rarity' => 'special',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'penumbra' => [
							'name' => 'Penumbra',
							'image' => 'https://i.imgur.com/YAWr3NG.png',
							'rarity' => 'special',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						]
					],
					'Medium' =>
					[
						'cloudburst' => [
							'name' => 'Cloudburst',
							'image' => 'https://i.imgur.com/i4Alp1u.png',
							'rarity' => 'common',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'wet season',
								'group_one' => [
									'albino'
								],
								'group_two' => [
									'chartreux',
									'korat',
									'maltese'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 7,
							],
						],
						'dun' => [
							'name' => 'Dun',
							'image' => 'https://i.imgur.com/AMD8A8P.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'steele' => [
							'name' => 'Steele',
							'image' => 'https://i.imgur.com/Ll0T5jC.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sterling' => [
							'name' => 'Sterling',
							'image' => 'https://i.imgur.com/g7cWatw.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'maltese' => [
							'name' => 'Maltese',
							'image' => 'https://i.imgur.com/f8VAklE.png',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'cocoa' => [
							'name' => 'Cocoa',
							'image' => 'https://i.imgur.com/CQQ3nN1.png',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'arctic' => [
							'name' => 'Arctic',
							'image' => 'https://i.imgur.com/i2FRRXf.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						],
						'aufeis' => [
							'name' => 'Aufeis',
							'image' => 'https://i.imgur.com/usCQa6M.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 0,
							],
						],
						'hematite' => [
							'name' => 'Hematite',
							'image' => 'https://i.imgur.com/NMrf2QS.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'moonstone' => [
							'name' => 'Moonstone',
							'image' => 'https://i.imgur.com/4hWKMUY.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'sidereal' => [
							'name' => 'Sidereal',
							'image' => 'https://i.imgur.com/VEwN8AG.png',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 15,
							],
						]
					],
					'Light' =>
					[
						'dove_gray' => [
							'name' => 'Dove Gray',
							'image' => 'https://i.imgur.com/AOJl9Bp.png',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'dusty' => [
							'name' => 'Dusty',
							'image' => 'https://i.imgur.com/9VONHMR.png',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'rosy_brown' => [
							'name' => 'Rosy Brown',
							'image' => 'https://i.imgur.com/Q0LXSkw.png',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'silver_gray' => [
							'name' => 'Silver Gray',
							'image' => 'https://i.imgur.com/9KIbWa9.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'chartreux' => [
							'name' => 'Chartreux',
							'image' => 'https://i.imgur.com/GToLBIl.png',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'glacial' => [
							'name' => 'Glacial',
							'image' => 'https://i.imgur.com/uKgK6QA.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'opal' => [
							'name' => 'Opal',
							'image' => 'https://i.imgur.com/hEHfKFc.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'pulsar' => [
							'name' => 'Pulsar',
							'image' => 'https://i.imgur.com/FgaNPeO.png',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'july',
								'group_one' => [
									'arctic'
								],
								'group_two' => [
									'anjeer',
									'blazing',
									'inferno',
									'prune'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 150,
							],
						],
						'skyward' => [
							'name' => 'Skyward',
							'image' => 'https://i.imgur.com/HUpfSjg.png',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 30,
							],
						],
						'soul' => [
							'name' => 'Soul',
							'image' => 'https://i.imgur.com/zM6DLjW.png',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'ebony'
								],
								'group_two' => [
									'ivory'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 15,
							],
						]
					]
				],
				'Solid' =>
				[
					'Dark' =>
					[
						'chestnut' => [
							'name' => 'Chestnut',
							'image' => 'https://i.imgur.com/sQAixA8.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'jet' => [
							'name' => 'Jet',
							'image' => 'https://i.imgur.com/A7eD9QQ.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'nadir' => [
							'name' => 'Nadir',
							'image' => 'https://i.imgur.com/pJyve1c.png',
							'rarity' => 'common',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'black_rose',
									'ebony'
								],
								'group_two' => [
									'ardor',
									'hellebore',
									'rhodonite'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 25,
							],
						],
						'obsidian' => [
							'name' => 'Obsidian',
							'image' => 'https://i.imgur.com/S3COHya.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'titanium' => [
							'name' => 'Titanium',
							'image' => 'https://i.imgur.com/QR0WAQY.png',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'onyx' => [
							'name' => 'Onyx',
							'image' => 'https://i.imgur.com/dZqlYSb.png',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 200,
								'gb_price' => 0,
							],
						],
						'ebony' => [
							'name' => 'Ebony',
							'image' => 'https://i.imgur.com/7wDAaKR.png',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						],
						'haze' => [
							'name' => 'Haze',
							'image' => 'https://i.imgur.com/ODuCTEC.png',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 25,
							],
						],
						'interstellar' => [
							'name' => 'Interstellar',
							'image' => 'https://i.imgur.com/JcAHmtr.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 15,
							],
						],
						'nuumite' => [
							'name' => 'Nuumite',
							'image' => 'https://i.imgur.com/VrSIrMQ.png',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						]
					],
					'Medium' =>
					[
						'dark_brown' => [
							'name' => 'Dark Brown',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'liver' => [
							'name' => 'Liver',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'silver' => [
							'name' => 'Silver',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'flint' => [
							'name' => 'Flint',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 75,
								'gb_price' => 0,
							],
						],
						'lilac' => [
							'name' => 'Lilac',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 8,
							],
						]
					],
					'Light' =>
					[
						'albino' => [
							'name' => 'Albino',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'birch' => [
							'name' => 'Birch',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'eggshell' => [
							'name' => 'Eggshell',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'isabel' => [
							'name' => 'Isabel',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'white' => [
							'name' => 'White',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'clear_white' => [
							'name' => 'Clear White',
							'image' => '',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'ashen' => [
							'name' => 'Ashen',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'cairngorm' => [
							'name' => 'Cairngorm',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'celestial',
									'ice',
									'sidereal',
									'skyward'
								],
								'group_two' => [
									'cocoa',
									'ethereal',
									'pearl',
									'slate'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						]
					]
				]
			],
			'Cream' =>
			[
				'Countershaded' =>
				[
					'Dark' =>
					[
						'blonde' => [
							'name' => 'Blonde',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'dusty_rose' => [
							'name' => 'Dusty Rose',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'pecan' => [
							'name' => 'Pecan',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'savannah' => [
							'name' => 'Savannah',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'russet' => [
							'name' => 'Russet',
							'image' => '',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 75,
								'gb_price' => 0,
							],
						],
						'arabica' => [
							'name' => 'Arabica',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'black'
								],
								'group_two' => [
									'buttercream',
									'buttermilk'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'nacre' => [
							'name' => 'Nacre',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'olive' => [
							'name' => 'Olive',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'caramel'
								],
								'group_two' => [
									'xanthic'
								]
							],
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'supernal' => [
							'name' => 'Supernal',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						]
					],
					'Medium' =>
					[
						'dark_vanilla' => [
							'name' => 'Dark Vanilla',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'deep_fawn' => [
							'name' => 'Deep Fawn',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'hazelnut' => [
							'name' => 'Hazelnut',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'mongoose' => [
							'name' => 'Mongoose',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'cameo' => [
							'name' => 'Cameo',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'asiatic' => [
							'name' => 'Asiatic',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'dun',
									'gray'
								],
								'group_two' => [
									'cream',
									'white'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'fossil' => [
							'name' => 'Fossil',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'hallowed' => [
							'name' => 'Hallowed',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						]
					],
					'Light' =>
					[
						'almond' => [
							'name' => 'Almond',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'antler' => [
							'name' => 'Antler',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'vanilla' => [
							'name' => 'Vanilla',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'buff' => [
							'name' => 'Buff',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'cherry_blossom' => [
							'name' => 'Cherry Blossom',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						],
						'ethereal' => [
							'name' => 'Ethereal',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						],
						'ivory' => [
							'name' => 'Ivory',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'nautilus' => [
							'name' => 'Nautilus',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 0,
							],
						]
					]
				],
				'Solid' =>
				[
					'Dark' =>
					[
						'caramel' => [
							'name' => 'Caramel',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'khaki' => [
							'name' => 'Khaki',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'persimmon' => [
							'name' => 'Persimmon',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'tan' => [
							'name' => 'Tan',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'amber' => [
							'name' => 'Amber',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 75,
								'gb_price' => 0,
							],
						],
						'hellebore' => [
							'name' => 'Hellebore',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'lilac'
								],
								'group_two' => [
									'goldenrod',
									'udara'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'parhelion' => [
							'name' => 'Parhelion',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'qahir' => [
							'name' => 'Qahir',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'buff',
									'cameo',
									'hallowed',
									'russet'
								],
								'group_two' => [
									'chartreux',
									'glacial',
									'hematite',
									'opal'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 20,
							],
						]
					],
					'Medium' =>
					[
						'cream' => [
							'name' => 'Cream',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'cream_darker' => [
							'name' => 'Cream Darker',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'dark_fawn' => [
							'name' => 'Dark Fawn',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'fawn' => [
							'name' => 'Fawn',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'buttercream' => [
							'name' => 'Buttercream',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'pearl' => [
							'name' => 'Pearl',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 0,
							],
						],
						'ruffian' => [
							'name' => 'Ruffian',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						]
					],
					'Light' =>
					[
						'apricot' => [
							'name' => 'Apricot',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'beige' => [
							'name' => 'Beige',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'cream_lighter' => [
							'name' => 'Cream Lighter',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'light_cream' => [
							'name' => 'Light Cream',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'buttermilk' => [
							'name' => 'Buttermilk',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'teardrop' => [
							'name' => 'Teardrop',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 500,
								'gb_price' => 0,
							],
						],
						'solaris' => [
							'name' => 'Solaris',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 25,
							],
						]
					]
				]
			],
			'Golden' =>
			[
				'Countershaded' =>
				[
					'Dark' =>
					[
						'deira' => [
							'name' => 'Deira',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'doubloon' => [
							'name' => 'Doubloon',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'jacinthe' => [
							'name' => 'Jacinthe',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'ochre' => [
							'name' => 'Ochre',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'dinar' => [
							'name' => 'Dinar',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'fulvous' => [
							'name' => 'Fulvous',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'anubis' => [
							'name' => 'Anubis',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						],
						'asali' => [
							'name' => 'Asali',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'exclusive',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'kimanjano' => [
							'name' => 'Kimanjano',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 20,
							],
						]
					],
					'Medium' =>
					[
						'ducat' => [
							'name' => 'Ducat',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'saffron' => [
							'name' => 'Saffron',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sunflower' => [
							'name' => 'Sunflower',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'nacarat' => [
							'name' => 'Nacarat',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'bast' => [
							'name' => 'Bast',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						],
						'dhahabi' => [
							'name' => 'Dhahabi',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'exclusive',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						]
					],
					'Light' =>
					[
						'bisquit' => [
							'name' => 'Bisquit',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'bone' => [
							'name' => 'Bone',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sunglow' => [
							'name' => 'Sunglow',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'champagne' => [
							'name' => 'Champagne',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'citrine' => [
							'name' => 'Citrine',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'cinnabar',
									'kimanjano',
									'topaz',
									'xanthic'
								],
								'group_two' => [
									'cherry_blossom',
									'fiery',
									'fulvous',
									'sulphur'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						]
					]
				],
				'Solid' =>
				[
					'Dark' =>
					[
						'dark_golden' => [
							'name' => 'Dark Golden',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zarafshan' => [
							'name' => 'Zarafshan',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zarbanu' => [
							'name' => 'Zarbanu',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'xanthic' => [
							'name' => 'Xanthic',
							'image' => '',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'udara' => [
							'name' => 'Udara',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'chatoyant' => [
							'name' => 'Chatoyant',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'trophy' => [
							'name' => 'Trophy',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						]
					],
					'Medium' =>
					[
						'luteo' => [
							'name' => 'Luteo',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sundust' => [
							'name' => 'Sundust',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zarasa' => [
							'name' => 'Zarasa',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zarin' => [
							'name' => 'Zarin',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'topaz' => [
							'name' => 'Topaz',
							'image' => '',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'goldenrod' => [
							'name' => 'Goldenrod',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'gilded' => [
							'name' => 'Gilded',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'anubis',
									'bast',
									'seth'
								],
								'group_two' => [
									'anubis',
									'bast',
									'seth'
								]
							],
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'green' => [
							'name' => 'Green',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'labradorite' => [
							'name' => 'Labradorite',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						],
						'mobola' => [
							'name' => 'Mobola',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'exclusive',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						]
					],
					'Light' =>
					[
						'bisque' => [
							'name' => 'Bisque',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'lemon' => [
							'name' => 'Lemon',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'light_golden' => [
							'name' => 'Light Golden',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'linen' => [
							'name' => 'Linen',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zer' => [
							'name' => 'Zer',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'zivar' => [
							'name' => 'Zivar',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sunshine' => [
							'name' => 'Sunshine',
							'image' => '',
							'rarity' => 'uncommon',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sulphur' => [
							'name' => 'Sulphur',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 75,
								'gb_price' => 0,
							],
						]
					]
				]
			],
			'Red' =>
			[
				'Countershaded' =>
				[
					'Dark' =>
					[
						'auburn' => [
							'name' => 'Auburn',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'brass' => [
							'name' => 'Brass',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'bronze' => [
							'name' => 'Bronze',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'ruddy' => [
							'name' => 'Ruddy',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'prune' => [
							'name' => 'Prune',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'madagascar' => [
							'name' => 'Madagascar',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'sapela',
									'sepia',
									'shedua',
									'unholy'
								],
								'group_two' => [
									'ivory',
									'nacre',
									'sunset',
									'supernal'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'rhodonite' => [
							'name' => 'Rhodonite',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'temporal' => [
							'name' => 'Temporal',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'october',
								'group_one' => [
									'unholy'
								],
								'group_two' => [
									'bast',
									'sunset'
								]
							],
							'price' => [
								'sb_price' => 0,
								'gb_price' => 200,
							],
						],
						'unholy' => [
							'name' => 'Unholy',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						]
					],
					'Medium' =>
					[
						'ginger' => [
							'name' => 'Ginger',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'mauve' => [
							'name' => 'Mauve',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'rust' => [
							'name' => 'Rust',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'anjeer' => [
							'name' => 'Anjeer',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'brimstone' => [
							'name' => 'Brimstone',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						],
						'inferno' => [
							'name' => 'Inferno',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						],
						'sunset' => [
							'name' => 'Sunset',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 5,
							],
						]
					],
					'Light' =>
					[
						'copper' => [
							'name' => 'Copper',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'palomino' => [
							'name' => 'Palomino',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sorrel' => [
							'name' => 'Sorrel',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'tawny' => [
							'name' => 'Tawny',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'fiery' => [
							'name' => 'Fiery',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 300,
								'gb_price' => 0,
							],
						],
						'maroon' => [
							'name' => 'Maroon',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 200,
								'gb_price' => 0,
							],
						],
						'blazing' => [
							'name' => 'Blazing',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						],
						'fuchsia' => [
							'name' => 'Fuchsia',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 4,
							],
						],
						'sunrise' => [
							'name' => 'Sunrise',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 7,
							],
						]
					]
				],
				'Solid' =>
				[
					'Dark' =>
					[
						'chocolate' => [
							'name' => 'Chocolate',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'henna' => [
							'name' => 'Henna',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'redwood' => [
							'name' => 'Redwood',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'shedua' => [
							'name' => 'Shedua',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 150,
								'gb_price' => 0,
							],
						],
						'black_rose' => [
							'name' => 'Black Rose',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'combo',
							'combos' => [
								'obtainable' => 'any',
								'group_one' => [
									'cinnabar'
								],
								'group_two' => [
									'jet',
									'obsidian',
									'onyx'
								]
							],
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'bloodbourne' => [
							'name' => 'Bloodbourne',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						],
						'manakbir' => [
							'name' => 'Manakbir',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						]
					],
					'Medium' =>
					[
						'brown' => [
							'name' => 'Brown',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'locust' => [
							'name' => 'Locust',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 1,
							],
						],
						'mahogany' => [
							'name' => 'Mahogany',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sienna' => [
							'name' => 'Sienna',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'umber' => [
							'name' => 'Umber',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'blush_rose' => [
							'name' => 'Blush Rose',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 2,
							],
						],
						'sepia' => [
							'name' => 'Sepia',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 15,
							],
						],
						'seth' => [
							'name' => 'Seth',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 3,
							],
						]
					],
					'Light' =>
					[
						'cedar' => [
							'name' => 'Cedar',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'ncl',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'cremello' => [
							'name' => 'Cremello',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'fallow' => [
							'name' => 'Fallow',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'sandy' => [
							'name' => 'Sandy',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'wild_rose' => [
							'name' => 'Wild Rose',
							'image' => '',
							'rarity' => 'common',
							'gained' => 'custom',
							'price' => [
								'sb_price' => 50,
								'gb_price' => 0,
							],
						],
						'cinnabar' => [
							'name' => 'Cinnabar',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 300,
								'gb_price' => 0,
							],
						],
						'sapela' => [
							'name' => 'Sapela',
							'image' => '',
							'rarity' => 'rare',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 100,
								'gb_price' => 0,
							],
						],
						'ardor' => [
							'name' => 'Ardor',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'applicator',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 10,
							],
						],
						'orchid' => [
							'name' => 'Orchid',
							'image' => '',
							'rarity' => 'special',
							'gained' => 'breed',
							'price' => [
								'sb_price' => 0,
								'gb_price' => 25,
							],
						]
					]
				]
			]
        ];

        // empty table(s)
        Base::truncate();
        Price::truncate();

        // loop through bases
        foreach($bases as $color => $groups)
        {
        	foreach($groups as $group => $shades)
        	{
        		foreach($shades as $shade => $_bases)
        		{
        			foreach($_bases as $_base)
        			{
	        			// create new base
	        			$base = Base::create([
	        				'name' => $_base['name'],
	        				'color' => $color,
	        				'group' => $group,
	        				'shade' => $shade,
	        				'image' => $_base['image'],
	        				'rarity' => $_base['rarity'],
	        				'gained' => $_base['gained'],
	        			]);

	        			// create the price
	        			$price = Price::create([
	        				'gene_type' => Base::class,
	        				'gene_id' => $base->id,
	        				'sb_price' => $_base['price']['sb_price'],
	        				'gb_price' => $_base['price']['gb_price'],
	        			]);
        			}
        		}
        	}
        }
    }
}