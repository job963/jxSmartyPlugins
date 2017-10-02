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
 * add [{ jxrem remark="..." display="none" }] where you want to display an remark/comment
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxrem( $aParams, &$oSmarty )
{
    $sReturn = '';
    $oConfig = oxRegistry::getConfig();

    $sDisplayRegex = $oConfig->getConfigParam('sJxSmartyDisplayRegex');
    if ($sDisplayRegex == '') {
        $sDisplayRegex = '.*';
    }
    $sDisplayRegex = '/' . $sDisplayRegex . '/';
    
    if (($aParams['display'] != 'none') and (preg_match($sDisplayRegex,$_SERVER['HTTP_HOST']))) {
        if ($aParams['remark'] != '') {
            $sReturn .= '<!--';
            $sReturn .= $aParams['remark'];
            $sReturn .= '-->';
        }
    }
        
    return $sReturn;
}


?>
