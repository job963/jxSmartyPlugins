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
 */

/**
 * Smarty Alert function
 * -------------------------------------------------------------
 * Purpose: displays an alert box
 * add [{ jxalertbox msg="..." type="..." }] where you want to display content
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxalertbox( $aParams, &$oSmarty )
{
	switch ($aParams['type']) {
		case 'success':
			$sHeader = '<div style="color:#3c763d; background-color:#dff0d8; padding:15px; border:1px solid #d6e9c6; border-radius:3px;">';
			break;
		case 'info':
			$sHeader = '<div style="color:#31708f; background-color:#d9edf7; padding:15px; border:1px solid #bce8f1; border-radius:3px;">';
			break;
		case 'warning':
			$sHeader = '<div style="color:#8a6d3b; background-color:#fcf8e3; padding:15px; border:1px solid #faebcc; border-radius:3px;">';
			break;
		case 'danger':
			$sHeader = '<div style="color:#a94442; background-color:#f2dede; padding:15px; border:1px solid #ebccd1; border-radius:3px;">';
			break;
		default:
			break;
	}
	$sFooter = '</div>';
    return $sHeader . $aParams['msg'] . $sFooter;
}


?>
