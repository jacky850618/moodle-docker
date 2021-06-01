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

namespace tool_brickfield\local\htmlchecker\common\checks;

use tool_brickfield\local\htmlchecker\common\brickfield_accessibility_test;

/**
 * Brickfield accessibility HTML checker library.
 *
 * All embed elements have an associated noembed element that contains a text equivalent to the embed element.
 * Provide a text equivalent for the embed element.
 *
 * @package    tool_brickfield
 * @copyright  2020 onward: Brickfield Education Labs, www.brickfield.ie
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class embed_has_associated_no_embed extends brickfield_accessibility_test {

    /** @var int The default severity code for this test. */
    public $defaultseverity = \tool_brickfield\local\htmlchecker\brickfield_accessibility::BA_TEST_SEVERE;

    /**
     * The main check function. This is called by the parent class to actually check content
     */
    public function check(): void {
        foreach ($this->get_all_elements('embed') as $embed) {
            // If one of the child nodes is a 'noembed', then content is fine.
            foreach ($embed->childNodes as $child) {
                if ($child->nodeName == 'noembed') {
                    return;
                }
            }
            // There were no 'noembed' child nodes. If the next sibling isn't, then the content is flawed.
            if (!$this->property_is_equal($embed->nextSibling, 'tagName', 'noembed')) {
                $this->add_report($embed);
            }
        }
    }
}
