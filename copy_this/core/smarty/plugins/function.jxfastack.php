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
 * Smarty Font Awesome function
 * -------------------------------------------------------------
 * Purpose: displays an font awesome character / symbol
 * add 
 *   [{ jxfastack inner="..." outer="..." innercolor="..." outercolor="..." inverse="true|false" order="reverse" rot="90|180|270" flip="hot|vert" }]
 * where you want to display an font awesome icon
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxfastack( $aParams, &$oSmarty )
{
    $sReturn = '';
    $oConfig = oxRegistry::getConfig();

    /*if ($oConfig->getConfigParam('blJxSmartyLoadBsStylesheet')) {
        $sReturn .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
    }*/
    
    $sReturn = '<span class="fa-stack fa-lg">';
    
    $aIcons = array('inner' => '', 'outer' => '');
    
    foreach ($aIcons as $sIcon => $sValue) {
        $aIcons[$sIcon] .= '<i class="fa';
        
        $sParamName = $sIcon . 'icon';
        if ($aParams[$sParamName] != '') {
            $aIcons[$sIcon] .= ' fa-' . $aParams[$sParamName];
        }
        
        if ($sIcon == 'outer') {
            $aIcons[$sIcon] .= ' fa-stack-2x';
        }
        else {
            $aIcons[$sIcon] .= ' fa-stack-1x';
        }
        
        if ($sIcon == 'inner') {
            if ($aParams['inverse'] == 'true') {
                $aIcons[$sIcon] .= ' fa-inverse';
            }
            
            if ($aParams['rot'] != '') {
                $aIcons[$sIcon] .= ' fa-rotate';
                switch ($aParams['rot']) {
                    case '90':
                        $aIcons[$sIcon] .= '-90';
                        break;
                    case '180':
                        $aIcons[$sIcon] .= '-180';
                        break;
                    case '270':
                        $aIcons[$sIcon] .= '-90';
                        break;
                    default:
                        $aIcons[$sIcon] .= '-90';
                        break;
                }
            }
            
            if ($aParams['spin'] == 'true') {
                $aIcons[$sIcon] .= ' fa-spin';
            }
        }

        $aIcons[$sIcon] .= '"';

        $sParamName = $sIcon . 'color';
        if ($aParams[$sParamName] != '') {
            $aIcons[$sIcon] .= ' style="color:' . $aParams[$sParamName] .'"';
        }

        $aIcons[$sIcon] .= '></i>';
    }
    
    
    // outer fa icon
    $sOuter = '<i class="fa';
    
    /*
    
    if ($aParams['spin'] != '') {
        switch ($aParams['spin']) {
            case 'spinner':
                $sReturn .= ' fa-spinner fa-spin';
                break;
            case 'circle':
                $sReturn .= ' fa-circle-o-notch fa-spin';
                break;
            case 'refresh':
                $sReturn .= ' fa-refresh fa-spin';
                break;
            case 'cog':
                $sReturn .= ' fa-cog fa-spin';
                break;
            case 'pulse':
                $sReturn .= ' fa-spinner fa-pulse';
                break;
            default:
                $sReturn .= ' fa-spinner fa-spin';
                break;
        }
    }
    
    if ($aParams['flip'] != '') {
        $sReturn .= ' fa-flip';
        switch ($aParams['flip']) {
            case 'hor':
                $sReturn .= '-horizontal';
                break;
            case 'vert':
                $sReturn .= '-vertical';
                break;
            default:
                $sReturn .= '-horizontal';
                break;
        }
    }
    */
    

    if ($aParams['order'] == 'reverse') {
        $sReturn .= $aIcons['inner'] . $aIcons['outer'];
    }
    else {
        $sReturn .= $aIcons['outer'] . $aIcons['inner'];
    }
    
    $sReturn .= '</span>';
    
    /*if ($aParams['spin'] != '') {
        $sReturn .= '<span class="sr-only">Loading...</span>';
    }*/
            
    return $sReturn;
}


?>
