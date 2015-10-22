<?php

/**
 * bibi — Manipulate bibi numbers from Deximalisation Project
 *
 * This file is part of the Deximalisation Project.
 *
 * @package   bibi
 * @author    Fauve <contact@taniere.info>
 * @copyright © 󰀇󰀍󰀎 ↔ 2015 — Fauve, Deximalisation Project.
 * @license   MIT http://opensource.org/licenses/mit-license.php
 *
 */

$decimal2bibinaryCorrespondence = [
    "HO", "HA", "HE", "HI",
    "BO", "BA", "BE", "BI",
    "KO", "KA", "KE", "KI",
    "DO", "DA", "DE", "DI"
];

//class constructNewCharacter
//{
	//public $litteral;
	//public $decimal;
	//public $character;

	//function __construct ($litteral, $decimal, $character)
	//{
		//$this->litteral  = $litteral;
		//$this->decimal   = $decimal;
		//$this->character = $character;
	//}
//}

//$litt2dec2bibi = [
	//new constructNewCharacter("HO",  0, "󰀀"),
	//new constructNewCharacter("HA",  1, "󰀁"),
	//new constructNewCharacter("HE",  2, "󰀂"),
	//new constructNewCharacter("HI",  3, "󰀃"),
	//new constructNewCharacter("BO",  4, "󰀄"),
	//new constructNewCharacter("BA",  5, "󰀅"),
	//new constructNewCharacter("BE",  6, "󰀆"),
	//new constructNewCharacter("BI",  7, "󰀇"),
	//new constructNewCharacter("KO",  8, "󰀈"),
	//new constructNewCharacter("KA",  9, "󰀉"),
	//new constructNewCharacter("KE", 10, "󰀊"),
	//new constructNewCharacter("KI", 11, "󰀋"),
	//new constructNewCharacter("DO", 12, "󰀌"),
	//new constructNewCharacter("DA", 13, "󰀍"),
	//new constructNewCharacter("DE", 14, "󰀎"),
	//new constructNewCharacter("DI", 15, "󰀏"),
//];

$litt2dec2bibi = [
	[ 'litteral' => 'HO',  'decimal' => ' 0',  'character' => '󰀀' ],
	[ 'litteral' => 'HA',  'decimal' => ' 1',  'character' => '󰀁' ],
	[ 'litteral' => 'HE',  'decimal' => ' 2',  'character' => '󰀂' ],
	[ 'litteral' => 'HI',  'decimal' => ' 3',  'character' => '󰀃' ],
	[ 'litteral' => 'BO',  'decimal' => ' 4',  'character' => '󰀄' ],
	[ 'litteral' => 'BA',  'decimal' => ' 5',  'character' => '󰀅' ],
	[ 'litteral' => 'BE',  'decimal' => ' 6',  'character' => '󰀆' ],
	[ 'litteral' => 'BI',  'decimal' => ' 7',  'character' => '󰀇' ],
	[ 'litteral' => 'KO',  'decimal' => ' 8',  'character' => '󰀈' ],
	[ 'litteral' => 'KA',  'decimal' => ' 9',  'character' => '󰀉' ],
	[ 'litteral' => 'KE',  'decimal' => '10',  'character' => '󰀊' ],
	[ 'litteral' => 'KI',  'decimal' => '11',  'character' => '󰀋' ],
	[ 'litteral' => 'DO',  'decimal' => '12',  'character' => '󰀌' ],
	[ 'litteral' => 'DA',  'decimal' => '13',  'character' => '󰀍' ],
	[ 'litteral' => 'DE',  'decimal' => '14',  'character' => '󰀎' ],
	[ 'litteral' => 'DI',  'decimal' => '15',  'character' => '󰀏' ]
];

function hex2bibi($givenHexadecimalNumber)
{
	$bibinariesedNumber=strtolower($givenHexadecimalNumber);

	for ($currentDecDigit = 0; $currentDecDigit <= 15; $currentDecDigit++) {
		$currentHexDigit=dechex($currentDecDigit);
		$currentBibiChar=$GLOBALS['litt2dec2bibi'][$currentDecDigit]['character'];

		$bibinariesedNumber=str_replace($currentHexDigit, $currentBibiChar ,$bibinariesedNumber);
	}


	return $bibinariesedNumber;
}


function dec2bibi($givenDecimalNumber)
{
	$intermediateNumber=hex2bibi(dechex($givenDecimalNumber));

	return $intermediateNumber;
}
