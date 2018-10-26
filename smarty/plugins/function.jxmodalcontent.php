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
 * Smarty Modal Dialog function
 * -------------------------------------------------------------
 * Purpose: Displays a CMS page in a modal dialog
 * add [{ jxmodalcontent button="..." title="..." ident="..." close="true|false" footerbutton="..." delay="..." timeout="..." }] where you want to display content
 * -------------------------------------------------------------
 *
 * @param array  $aParams  parameters to process
 * @param smarty &$oSmarty smarty object
 *
 * @return string
 */
function smarty_function_jxmodalcontent( $aParams, &$oSmarty )
{
    $myConfig = oxRegistry::getConfig();
    $sReturn = '';  //$myConfig->getActiveShop()->oxshops__oxproductive->value ? null : "<b>content not found ! check ident(".$aParams['ident'].") !</b>";
    $oSmarty->oxidcache = new oxField($sReturn, oxField::T_RAW);

    $sIdent = isset( $aParams['ident'] )?$aParams['ident']:null;
    $sOxid  = isset( $aParams['oxid'] )?$aParams['oxid']:null;
    //$sReturn = '';
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

    if ($aParams['button']) {
        $sReturn .= '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">' . $aParams['button'] . '</button>';
    }
	
    if ( $sIdent || $sOxid ) {
        $oContent = oxNew( "oxcontent" );
        if ( $sOxid ) {
            $blLoaded = $oContent->load( $sOxid );
        } else {
            $blLoaded = $oContent->loadbyIdent( $sIdent );
        }

        if ( $blLoaded && $oContent->oxcontents__oxactive->value ) {
            $sReturn .= '<div class="modal fade" id="myModal" role="dialog">';
            $sReturn .= '<div class="modal-dialog">';

            $sReturn .= '<div class="modal-content">';
            if ($aParams['title']) {
                // set value
                $sField = "oxtitle";
                /* **if ( $aParams['field'] ) {
                    $sField = $aParams['field'];
                }** */
                // set value
                $sProp = 'oxcontents__'.$sField;
                $oSmarty->oxidcache = clone $oContent->$sProp;
                $oSmarty->compile_check  = true;
                $sCacheId = oxRegistry::getLang()->getBaseLanguage() . $myConfig->getShopId();
			
                $sReturn .= '<div class="modal-header">';
                if ($aParams['close']) {
                    $sReturn .= '<button type="button" class="close" data-dismiss="modal">×</button>';
                }
                $sReturn .= '<h4 class="modal-title">' . $oSmarty->fetch( "ox:".(string)$sIdent.(string)$sOxid.$sField.$sCacheId) . '</div>';
            }

            // set value
            $sField = "oxcontent";
            if ( $aParams['field'] ) {
                $sField = $aParams['field'];
            }
            // set value
            $sProp = 'oxcontents__'.$sField;
            $oSmarty->oxidcache = clone $oContent->$sProp;
            $oSmarty->compile_check  = true;
            $sCacheId = oxRegistry::getLang()->getBaseLanguage() . $myConfig->getShopId();
			
            $sReturn .= '<div class="modal-body">';
            $sReturn .= '<p>' . $oSmarty->fetch( "ox:".(string)$sIdent.(string)$sOxid.$sField.$sCacheId) . '</p>';
            $sReturn .= '</div>';

            $sReturn .= '<div class="modal-footer">';
            $sReturn .= '<button type="button" class="btn btn-default" data-dismiss="modal">' . $aParams['footerbutton'] . '</button>';
            $sReturn .= '</div>';
            $sReturn .= '</div>';
            $sReturn .= '</div>';
            $sReturn .= '</div>';
	
            if ($aParams['delay']) {

                // Hide modal after 'timeout' time
                $sHideAfter = '';
                if ($aParams['timeout']) {
                   $sHideAfter = 'setTimeout(function(){'
                                   . '$("#jxModal").modal("hide");'
                               . '},' . $aParams['timeout'] . ');';
                }
                // Show modal after 'delay' time
                $sReturn .= '<script type="text/javascript">'
                            . 'window.onload = function(){'
                                . 'setTimeout(function(){'
                                    . '$("#jxModal").modal("show");'
                                    . $sHideAfter
                                . '},' . $aParams['delay'] . ');'
                            . '} '
                        . '</script>';/**/
            }
			
            $oSmarty->compile_check  = $myConfig->getConfigParam( 'blCheckTemplates' );
        }
        else {
            $sReturn = "<b>content not found ! check ident(".$aParams['ident'].") !</b>";
        }
    }

    // if we write '[{oxcontent ident="oxemailfooterplain" assign="fs_text"}]' the content wont be outputted.
    // instead of this the content will be assigned to variable.
    if( isset( $aParams['assign']) && $aParams['assign'])
        $oSmarty->assign($aParams['assign'], $sReturn);
    else
        return $sReturn;

}
