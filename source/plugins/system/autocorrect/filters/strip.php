<?php
/**
 * Joomla! plugin to autocorrect content
 *
 * @author Yireo (info@yireo.com)
 * @copyright Copyright 2015
 * @license GNU Public License
 * @link http://www.yireo.com
 * @contributor Jisse Reitsma, Yireo (main code)
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

// Import dependancies
include_once __DIR__.'/interface.php';

/**
 * Filtering class for stripping HTML from text
 */
class plgSystemAutocorrectFilterStrip implements plgSystemAutoCorrectFilterInterface
{
    public function filter($string)
    {
        $string = strip_tags($string);

        return $string;
    }
}
