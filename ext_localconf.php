<?php
defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'][Brotkrueml\GoToBackend\Extension::ADMINPANEL_MODULE_IDENTIFIER] = [
    'module' => Brotkrueml\GoToBackend\AdminPanel\EditModule::class,
    'after' => ['cache'],
];
