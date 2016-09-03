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
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Assassin',
		2	=> 'Barbarian',
		3	=> 'Ranger',
		4	=> 'Conqueror',
		5	=> 'Dark Templar',
		6	=> 'Guardian',
		7	=> 'Demonologist',
		8	=> 'Herald of Xotli',
		9	=> 'Necromancer',
		10	=> 'Bear Shaman',
		11	=> 'Priest of Mitra',
		12	=> 'Tempest of Set'
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aquilonian',
		2	=> 'Cimmerian',
		3	=> 'Stygian',
		4	=> 'Khitan'
	),
	'roles' => array(
		0	=> 'Unknown',
		1	=> 'Soldier',
		2	=> 'Priest',
		3	=> 'Rogue',
		4	=> 'Mage',
			
	),
	'factions' => array(
		'good'	=> 'Good',
		'evil'	=> 'Evil'
	),
	'lang' => array(
		'aoc'							=> 'Age of Conan',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Age of Conan Settings',
		'uc_faction'					=> 'Faction',
		'uc_faction_help'				=> 'Select the default faction',
	),
);
?>