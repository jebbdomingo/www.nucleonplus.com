<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/joomlatools-framework-ckeditor for the canonical source repository
 */

/**
 * Version.
 *
 * @author  Arunas Mazeika <https://github.com/amazeika>
 * @package Koowa\Component\Ckeditor
 */
class ComCkeditorVersion extends KObject
{
    const VERSION = '1.0.1';

    /**
     * Get the version.
     *
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }
}
