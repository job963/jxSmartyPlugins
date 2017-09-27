<?php
/**
 * This file is part of jxSmarty module for OXID eShop Community Edition.
 *
 * jxSmarty for OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * jxSmarty for OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      https://github.com/job963/jxSmarty
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2017
 * @author    Joachim Barthel <jobarthel@gmail.com>
 */

/**
 * Smarty Alert function
 * -------------------------------------------------------------
 * Purpose: displays an alert box
 * add [{ jxalertbox msg="..." type="..." timeout="..." }] where you want to display an alert
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxalertbox( $aParams, &$oSmarty )
{
    $sReturn = '';
    $oConfig = oxRegistry::getConfig();

    if ($oConfig->getConfigParam('blJxSmartyLoadBsStylesheet')) {
        $sReturn .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
    }
    if ($oConfig->getConfigParam('blJxSmartyLoadBsTheme')) {
        $sReturn .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">';
    }
    if ($oConfig->getConfigParam('blJxSmartyLoadBsJavascript')) {
        $sReturn .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
    }
    
    switch ($aParams['type']) {
        case 'success':
            $sReturn .= '<div class="alert alert-success">';
            break;
        case 'info':
            $sReturn .= '<div class="alert alert-info">';
            break;
        case 'warning':
            $sReturn .= '<div class="alert alert-warning">';
            break;
        case 'danger':
            $sReturn .= '<div class="alert alert-danger">';
            break;
        default:
            $sReturn .= '<div class="alert alert-info">';
            break;
    }
    $sReturn .= $aParams['msg'];
    $sReturn .= '</div>';
    
    // Hide alert after 'timeout' time
    if ($aParams['timeout']) {
        $sReturn .= '<script type="text/javascript">'
            . 'window.onload = function(){'
                . 'setTimeout(function(){'
                    . '$(".alert").slideUp(500);'
                . '},' . $aParams['timeout'] . ');'
            . '} '
        . '</script>';/**/

    }
        
    return $sReturn;
}


?>
