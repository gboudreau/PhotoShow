<?php
/**
 * This file contains the website configuration.
 * 
 * PHP versions 4 and 5
 *
 * LICENSE:
 * 
 * This file is part of PhotoShow.
 *
 * PhotoShow is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhotoShow is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhotoShow.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Website
 * @package   Photoshow
 * @author    Thibaud Rohmer <thibaud.rohmer@gmail.com>
 * @copyright 2011 Thibaud Rohmer
 * @license   http://www.gnu.org/licenses/
 * @link      http://github.com/thibaud-rohmer/PhotoShow
 */

// Folder where your pictures are stored.
// Must be at least readable by web server process
$config->photos_dir   = "/home/g3data/albums";

// Folder where PhotoShow parameters and thumbnails are stored.
// Must be writable by web server process
$config->ps_generated   = "/var/www/html/photos.danslereseau.com/generated/";

// Local timezone. Default one is "Europe/Paris".
$config->timezone = "America/Montreal";

$config->imagemagick_path = '/usr/bin/convert';

// Cache max age for images (and videos), incl. thumbnails
$config->cache_max_age = 10*365*24*60*60; // in seconds

// If you want to inject a tracking code (or anything really) in your pages <head>, use this to refer to a file containing that:
$config->tracking_code_include = '/var/www/html/photos.danslereseau.com/tracking_code.inc.html';

?>
