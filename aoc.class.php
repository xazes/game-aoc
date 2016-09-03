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

if(!class_exists('aoc')){
	class aoc extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '2.2.0';
		protected $this_game		= 'aoc';
		protected $types			= array('classes', 'races', 'factions', 'filters','roles');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> true,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						'good'		=> 'all',
						'evil'		=> 'all',
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',			// Unknown
						1 	=> array(0,1,2,3,4,5,6,11),		// Aquilonian
						2 	=> array(0,2,3,4,5,6,10),		// Cimmerian
						3 	=> array(0,1,3,7,8,9,12),			// Stygian
						4 	=> array(0,1,3,5,7,8,9,10),		// Kithan
					),
				),
			),
		);
		public $default_roles = array(

			0	=> array(0,1,2,3,4,5,6,7,8,9,10,11,12),# Anyrole
			1 	=> array(0,4,5,6),			# Soldier
			2 	=> array(0,10,11,12),		# Priest
			3 	=> array(0,1,2,3),			# Rogue
			4	=> array(0,7,8,9),			# Mage
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('rogue', true, $lang), 'value' => 'class:1,2,3'),
					array('name' => $this->glang('soldier', true, $lang), 'value' => 'class:4,5,6'),
					array('name' => $this->glang('mage', true, $lang), 'value' => 'class:7,8,9'),
					array('name' => $this->glang('priest', true, $lang), 'value' => 'class:10,11,12'),
				));
			}
		}

		public function install($install=false){}
	}#class
}
?>