<?php
/**
 * @version     1.0.0
 * @package     com_alisilly
 * @copyright   Copyright (C) 2013 Fabian Manzano. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_alisilly')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$doc = JFactory::getDocument();
$doc->addScript("/administration/com_alisilly/js/jquery.js");
$doc->addScript("/administration/com_alisilly/js/jquery.js");
$doc->addStyleSheet("/components/com_alisilly/css/com_alisilly_css.css");

$controller	= JController::getInstance('alisilly');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
