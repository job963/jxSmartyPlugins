<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 * 
 * @link      https://github.com/job963/jxSmartyPlugins
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2017
 * @author    Joachim Barthel <jobarthel@gmail.com>
 * 
 */
$aModule = array(
    'id'           => 'jxSmartyPlugins',
    'title'        => 'jxSmartyPlugins - Smarty Extensions',
    'description'  => array(
                        'de' => 'Erweiterung der Smarty Funktionalität.<ul>'
                                . '<li>Bootstrap Elemente'
                                . '<li>Font Awesome Icons'
                                . '<li>HTML Kommentare</ul>',
                        'en' => 'Bootstrap Elements as Extension of Smarty functions.<ul>'
                                . '<li>Bootstrap Elements'
                                . '<li>Font Awesome Icons'
                                . '<li>HTML Comments</ul>'
                        ),
    'thumbnail'    => 'jxsmartyplugins.png',
    'version'      => '0.3.0',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxSmartyPlugins',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
                        ),
    'templates'    => array(
                        ),
    'events'       => array(
                        ),
    'settings'     => array(
                        array(
                            'group' => 'JXSMARTY_BSINCLUDE', 
                            'name'  => 'blJxSmartyLoadBsStylesheet', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_BSINCLUDE', 
                            'name'  => 'blJxSmartyLoadBsTheme', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_BSINCLUDE', 
                            'name'  => 'blJxSmartyLoadBsJavascript', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_REMARKS', 
                            'name'  => 'sJxSmartyDisplayRegex', 
                            'type'  => 'str', 
                            'value' => ''
                            ),
                        /*array(
                            'group' => 'JXSMARTY_PPINCLUDE', 
                            'name'  => 'blJxSmartyLoadJQuery', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_PPINCLUDE', 
                            'name'  => 'blJxSmartyLoadPpStylesheet', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_PPINCLUDE', 
                            'name'  => 'blJxSmartyLoadPpJavascript', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),*/
                        )
    );

?>
