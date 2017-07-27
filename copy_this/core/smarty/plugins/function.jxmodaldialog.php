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
 * Smarty Modal Dialog function
 * -------------------------------------------------------------
 * Purpose: displays an alert box
 * add [{ jxmodaldialog button="..." title="..." body="..." close="true" footerbutton="..." }] where you want to display content
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxmodaldialog( $aParams, &$oSmarty )
{
	$sReturn = '';
	
	if ($aParams['button']) {
		$sReturn .= '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">' . $aParams['button'] . '</button>';
	}
	
	$sReturn .= '<div class="modal fade" id="myModal" role="dialog">';
	$sReturn .= '<div class="modal-dialog">';
	
	if ($aParams['body']) {
		$sReturn .= '<div class="modal-content">';
		if ($aParams['title']) {
			$sReturn .= '<div class="modal-header">';
			if ($aParams['close']) {
				$sReturn .= '<button type="button" class="close" data-dismiss="modal">×</button>';
			}
			$sReturn .= '<h4 class="modal-title">' . $aParams['button'];
			$sReturn .= '</div>';
		}
		$sReturn .= '<div class="modal-body">';
		$sReturn .= '<p>' . $aParams['body'] . '</p>';
		$sReturn .= '</div>';
		if ($aParams['footerbutton']) {
			$sReturn .= '<div class="modal-footer">';
			$sReturn .= '<button type="button" class="btn btn-default" data-dismiss="modal">' . $aParams['footerbutton'] . '</button>';
			$sReturn .= '</div>';
		}
		$sReturn .= '</div>';
	}
	
	$sReturn .= '</div>';
	$sReturn .= '</div>';
	
    return $sReturn;
}


?>
