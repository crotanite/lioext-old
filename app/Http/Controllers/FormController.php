<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FormController extends Controller
{
	/**
	 * Handle generating the image.
	 *
	 * @return
	 */
	public function lioimage()
	{
		// Get the variables
		$url = $_POST['url'];
		$background = isset($_POST['background']) ? $_POST['background'] : null;
		$decorations = isset($_POST['decorations']) ? $_POST['decorations'] : null;

		// Check url is from lioden
		if(strpos($url, 'lioden.com') === false)
		{
			// Not a lioden url
			echo 'Not a lioden URL.';
			header("HTTP/1.0 403 Forbidden");
			die();
		}

		// Get the html from the url
		$html = file_get_contents($url);

		// Use DOMDocument to load web page
		libxml_use_internal_errors(true);
		$dom = new \DOMDocument();
		$dom->loadHTML($html);
		$dom->preserveWhiteSpace = false;

		// Create images array
		$images = [];

		// Is the URL from a territory page?
		if(strpos($url, 'territory') === false)
		{
			// Fetch all the images
			$web_images = $dom->getElementsByTagName('img');
			foreach($web_images as $img)
			{
				$image = array('src' => $img->getAttribute('src'), 'opacity' => get_string_between($img->getAttribute('style'), 'opacity:', ';'));

				// Check src exists
				if(!$image['src'])
				{
					continue;
				}

				// Check if decorations are on
				if($decorations == 'on' && strpos($image['src'], 'decors') !== false)
				{
					// Add the image to images array
					$images[] = $image;
				}

				// Check if src contains 'dynamic'
				if(strpos($image['src'], 'dynamic') !== false) 
				{
					// Check if src contains 'backgrounds'
					if(strpos($image['src'], 'backgrounds') !== false)
					{
						// Check if we're fetching the background
						if($background == 'on')
						{
							// Add the image to images array
							$images[] = $image;
						}
					} else
					{
						// Add the image to images array
						$images[] = $image;
					}
				}
			}
		} else
		{
			// Fetch the #lion_image element
			$container = $dom->getElementById('lion_image');

			// Fetch all the images within the #lion_image element
			$web_images = $container->getElementsByTagName('img');

			// Loop through the web images
			foreach($web_images as $img)
			{
				$image = array('src' => $img->getAttribute('src'), 'opacity' => get_string_between($img->getAttribute('style'), 'opacity:', ';'));

				// Check src exists
				if(!$image['src'])
				{
					continue;
				}

				// Check if decorations are on
				if($decorations == 'on' && strpos($image['src'], 'decors') !== false)
				{
					// Update the image
					$image['top'] = get_string_between($img->getAttribute('style'), 'top: ', 'px;');
					$image['left'] = get_string_between($img->getAttribute('style'), 'left: ', 'px;');
					$image['transform'] = get_string_between($img->getAttribute('style'), 'transform: ', 'px;');

					// Add the image to images array
					$images[] = $image;
				}

				// Check if src contains 'dynamic'
				if(strpos($image['src'], 'battleLioness') !== false || strpos($image['src'], 'battleLion') !== false || strpos($image['src'], 'dynamic') !== false) 
				{
					// Check if src contains 'BG'
					if(strpos($image['src'], 'battleBG') !== false || strpos($image['src'], 'backgrounds') !== false)
					{
						// Check if we're fetching the background
						if($background == 'on')
						{
							// Add the image to images array
							$images[] = $image;
						}
					} else
					{
						// Add the image to images array
						$images[] = $image;
					}
				}
			}
		}

		// Check if there were any images
		if(empty($images))
		{
			// Not a lion/lioness page
			echo 'No lion/lioness images found.';
			header("HTTP/1.0 403 Forbidden");
			die();
		}

		// Set the parameters
		$width = 640;
		$height = 500;

		$final_image = imagecreatetruecolor($width, $height);
		$trans_colour = imagecolorallocatealpha($final_image, 0, 0, 0, 127);
		imagefill($final_image, 0, 0, $trans_colour);
		imagesavealpha($final_image, true);

		// Add all images
		foreach($images as $image)
		{
			$image_layer = imagecreatefrompng('https:'.$image['src']);
			imagealphablending($image_layer, false);
			imagesavealpha($image_layer, true);
			if(!$image['opacity'])
			{
				$opacity = 0;
			} else
			{
				$opacity = 1 - $image['opacity'];
			}
			imagefilter($image_layer, IMG_FILTER_COLORIZE, 0, 0, 0, 127 * $opacity);
			if(isset($image['top']))
			{
				// are we flipping
				if($image['transform'] === false)
				{
					imageflip($image_layer, IMG_FLIP_HORIZONTAL);
				}
				$top = $image['top'];
				$left = $image['left'];
			} else
			{
				$top = 0;
				$left = 0;
			}
			imagecopy($final_image, $image_layer, $left, $top, 0, 0, $width, $height);
		}

		// Resize if needed
		if(strpos($url, 'territory') !== false)
		{
			// Resizes
			$_width = 200;
			$_height = 200;

			// Create new image
			$final_image = imagecrop($final_image, ['x' => 0, 'y' => 0, 'width' => $_width, 'height' => $_height]);
		}

		ob_start();
		imagepng($final_image);
		$final_image_data = ob_get_contents();
		ob_end_clean();

		$final_image_encoded = "data:image/png;base64," . base64_encode($final_image_data);
		echo $final_image_encoded;
	}

	public function liogene()
	{
		// set variables
		$mother = $_POST['mother'];
		$father = $_POST['father'];
		$_potentials = [];
		$potentials = [];

		// fetch the content of the json file
		$path = public_path().'\data\liogene.json';
		$json_content = json_decode(file_get_contents($path), true);

		// get the mother correctly
		$mother_array = explode('-', $mother);
		$mother_color = $mother_array[0];
		$mother_group = $mother_array[1];
		$mother_shade = $mother_array[2];
		$mother_base = $mother_array[3];

		// get the father correctly
		$father_array = explode('-', $father);
		$father_color = $father_array[0];
		$father_group = $father_array[1];
		$father_shade = $father_array[2];
		$father_base = $father_array[3];

		// are the father and mother's colors the same?
		if($mother_color === $father_color)
		{
			// they are, so just add one to our _potentials
			$_potentials['colors'][] = ['value' => $mother_color, 'percentage' => 1];
		} else
		{
			// they are not, so lets add both to our _potentials
			$_potentials['colors'][] = ['value' => $mother_color, 'percentage' => 0.5];
			$_potentials['colors'][] = ['value' => $father_color, 'percentage' => 0.5];
		}

		// are the father and mother's groups the same?
		if($mother_group === $father_group)
		{
			// they are, so just add one to our _potentials
			$_potentials['groups'][] = ['value' => $mother_group, 'percentage' => 1];
		} else
		{
			// they are not, so lets add both to our _potentials
			$_potentials['groups'][] = ['value' => $mother_group, 'percentage' => 0.5];
			$_potentials['groups'][] = ['value' => $father_group, 'percentage' => 0.5];
		}

		// are the father and mother's shades both dark or both light?
		if($mother_shade === 'Dark' && $father_shade === 'Dark' || $mother_shade === 'Light' && $father_shade === 'Light')
		{
			// they are, so just add one to our _potentials
			$_potentials['shades'][] = ['value' => $mother_shade, 'percentage' => 1];
		} else
		{
			// are both of them medium?
			if($mother_shade === 'Medium' && $father_shade === 'Medium')
			{
				// they are, so add all three shades
				$_potentials['shades'][] = ['value' => 'Dark', 'percentage' => 0.15];
				$_potentials['shades'][] = ['value' => 'Medium', 'percentage' => 0.7];
				$_potentials['shades'][] = ['value' => 'Light', 'percentage' => 0.15];
			// is one of them dark, and one of them light?
			} else if($mother_shade === 'Dark' && $father_shade === 'Light' || $mother_shade === 'Light' && $father_shade === 'Dark')
			{
				// they are, so add all three shades
				$_potentials['shades'][] = ['value' => 'Dark', 'percentage' => 0.25];
				$_potentials['shades'][] = ['value' => 'Medium', 'percentage' => 0.5];
				$_potentials['shades'][] = ['value' => 'Light', 'percentage' => 0.25];
			} else
			{
				// they are not, so just add the two
				$_potentials['shades'][] = ['value' => $mother_shade, 'percentage' => 0.5];
				$_potentials['shades'][] = ['value' => $father_shade, 'percentage' => 0.5];
			}
		}

		// total percentage
		$total_percentage = 0;

		// loop through the colors
		foreach($_potentials['colors'] as $color)
		{
			// loop through the groups
			foreach($_potentials['groups'] as $group)
			{
				// loop through the shades
				foreach($_potentials['shades'] as $shade)
				{
					// set variables
					$percentage = $color['percentage'] * $group['percentage'] * $shade['percentage'];
					$total_percentage = $total_percentage + $percentage;

					// create the data
					$data = [
						'color' => $color['value'],
						'group' => $group['value'],
						'shade' => $shade['value'],
						'percentage' => $percentage,
						'colors' => $json_content[$color['value']][$group['value']][$shade['value']],
					];

					// add to potentials
					$potentials[] = $data;
				}
			}
		}

		// begin building the output
		$output = null;

		// loop through the potentials
		foreach($potentials as $potential)
		{
			// set the percentage
			$percentage = round(($potential['percentage']) * 100, 1);

			// open the row
			$output .= '<div class="row">';
			
			// add the title
			$output .= '<div class="col">';
			$output .= '<h5>'.$percentage.'% '.$potential['color'].' '.$potential['group'].' '.$potential['shade'].'</h5>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '<div class="row mb-4">';

			// set variable
			$colors = [];

			// loop through the colors
			foreach($potential['colors'] as $key => $color)
			{
				// is the base a combo base?
				if($color['gained'] === 'combo')
				{
					// is the mother's base in group one?
					if(in_array($mother_base, $color['combos']['group_one']))
					{
						// is the mother's base in group two?
						if(in_array($father_base, $color['combos']['group_two']))
						{
							// are they obtained whenever?
							if($color['combos']['obtainable'] !== 'any')
							{
								// nope, so update the name
								$color['name'] = $color['name'].' ('.$color['combos']['obtainable'].' only)';
							}
							// they are, so add to color
							$colors[] = $color;

							// continue
							continue;
						}
					}

					// is the father's base in group one?
					if(in_array($father_base, $color['combos']['group_one']))
					{
						// is the mother's base in group two?
						if(in_array($mother_base, $color['combos']['group_two']))
						{
							// they are, so add to color
							$colors[] = $color;

							// continue
							continue;
						}
					}
				}

				// is the base a special base?
				if($color['rarity'] === 'special' || $color['gained'] === 'applicator')
				{
					// is the mother or father carrying the base?
					if($mother_base === $key || $father_base === $key)
					{
						// they are, so add to color
						$colors[] = $color;
					}

					// continue
					continue;
				}

				// add to colors
				$colors[] = $color;
			}

			// loop through the colors
			foreach($colors as $c)
			{
				// add to output
				$output .= '<div class="col-lg-2 col-md-3 col-sm-4 col end text-center">';
				$output .= '<img src="'.$c['image'].'"/>';
				$output .= '<br>';
				$output .= '<strong>'.$c['name'].'</strong>';
				$output .= '</div>';
			}

			// close the row
			$output .= '</div>';
		}

		// return the _potentials
		//echo json_encode($potentials);
		echo $output;
	}

	public function liocost()
	{

	}
}