<?php
/**
 * @package     plg_wgfieldx - WG FieldX
 * @version     1.0 - Versão adaptada com em https://goo.gl/wDzlBO
 * @created     Ago 2015
 *
 * @author      Lauro W. Guedes
 * @email       leo-ti@hotmail.comn
 * @website     http://leowgweb.com.br
 * @support     Suporte - http://leowgweb.com.br/contato
 * @copyright   Copyright (C) 2015 Lauro W. Guedes.Todos os Direitos Reservados.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );
 
class plgContentWgfieldx extends JPlugin {
 
        /**
         * Load the language file on instantiation.
         * Note this is only available in Joomla 3.1 and higher.
         * If you want to support 3.0 series you must override the constructor
         *
         * @var boolean
         * @since 3.1
         */
 
        protected $autoloadLanguage = true;
 
        function onContentPrepareForm($form, $data) {
        
            $app = JFactory::getApplication();
            $option = $app->input->get('option');
            $show = $this->params->get('showfield');

            switch($option) {
                case 'com_content':
                if ($show == 0){
                    if ($app->isAdmin()) {
                        JForm::addFormPath(__DIR__ . '/forms');   
                        $form->loadFile('content', false);
                    }
                    if ($app->isSite()) {
                        JForm::addFormPath(__DIR__ . '/forms');   
                        $form->loadFile('content', false);
                    }
                }elseif ($show == 1) {
                    if ($app->isAdmin()) {
                        JForm::addFormPath(__DIR__ . '/forms');   
                        $form->loadFile('content', false);
                    }                
                }else{
                    if ($app->isSite()) {
                        JForm::addFormPath(__DIR__ . '/forms');   
                        $form->loadFile('content', false);
                    }
                }
                return true;
            }
            return true;
        }
}
?>