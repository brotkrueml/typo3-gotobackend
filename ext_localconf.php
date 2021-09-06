<?php
defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules']['ext-gotobackend'] = [
    'module' => Brotkrueml\GoToBackend\AdminPanel\EditModule::class,
    'after' => ['cache'],
];
