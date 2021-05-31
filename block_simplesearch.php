<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Form for editing HTML block instances.
 *
 * @package     block_simplesearch
 * @copyright   2021 ssystems GmbH {@link https://www.ssystems.de/}
 * @author      Tristan Strug <t.strug@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_simplesearch extends block_base {
    
    function init() {
        $this->title = get_string('titel', 'block_simplesearch');
    }
    
    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '<form method="get" action="/course/search.php" style="margin: 0pt; padding: 0pt;"><input title="Titel, Dozent/in oder Nr. der LV" name="search" size="13" type="text"> <input value="Suchen" type="submit"></form>';

        return $this->content;
    }
}