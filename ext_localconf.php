<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ghtcatalogue.' . $_EXTKEY,
	'Pi1',
	array(
		'Produit' => 'list, show, focus',
		'Category' => 'list, show',
		'Marchand' => 'list, show',

	),
	// non-cacheable actions
	array(
		'Produit' => '',
		'Category' => '',
		'Marchand' => '',
		'Caracteristiques' => '',
		'ValeurCaracteristiques' => '',

	)
);
