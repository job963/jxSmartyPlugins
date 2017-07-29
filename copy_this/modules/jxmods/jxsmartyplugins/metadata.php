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
 * 
 */
$aModule = array(
    'id'           => 'jxSmartyPlugins',
    'title'        => 'jxSmartyPlugins - Smarty Extensions',
    'description'  => array(
                        'de' => 'Erweiterung der Smarty Funktionalität.',
                        'en' => 'Updating the products by CSV imports.'
                        ),
    'thumbnail'    => 'jxsmartyplugins.png',
    'version'      => '0.1.0',
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
                            'group' => 'JXSMARTY_INCLUDE', 
                            'name'  => 'blJxSmartyLoadBsStylesheet', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_INCLUDE', 
                            'name'  => 'blJxSmartyLoadBsTheme', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        array(
                            'group' => 'JXSMARTY_INCLUDE', 
                            'name'  => 'blJxSmartyLoadBsJavascript', 
                            'type'  => 'bool', 
                            'value' => 'false'
                            ),
                        )
    );

?>
