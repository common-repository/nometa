<?php
/*
Plugin Name: NoMeta
Plugin URI: http://orenyomtov.com/nometa-wordpress-plugin.html
Description: Removes unneccesary meta info.
Version: 1.1
Author: Oren Yomtov
Author URI: http://orenyomtov.com
*/

/*
Copyright (C) 2011 Oren Yomtov, orenyomtov.com (thenameisoren AT gmail DOT com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/



remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

?>