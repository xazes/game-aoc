<?php
/*	Project:	EQdkp-Plus
 *	Package:	Age of Conan game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Assassin',
		2	=> 'Barbar',
		3	=> 'Waldläufer',
		4	=> 'Eroberer',
		5	=> 'Dunkler Templer',
		6	=> 'Wächter',
		7	=> 'Dämonologe',
		8	=> 'Herold des Xotli',
		9	=> 'Nekromant',
		10	=> 'Bärenschamane',
		11	=> 'Mitrapriester',
		12	=> 'Vollstrecker Sets'
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aquilonier',
		2	=> 'Cimmerier',
		3	=> 'Stygier',
		4	=> 'Khitaner'
	),
	'factions' => array(
		'good'	=> 'Gut',
		'evil'	=> 'Böse'
	),
	'lang' => array(
		'aoc'							=> 'Age of Conan',
		'rogue'							=> 'Schurke',
		'soldier'						=> 'Soldat',
		'mage'							=> 'Magier',
		'priest'						=> 'Priester',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Age of Conan Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);
?>