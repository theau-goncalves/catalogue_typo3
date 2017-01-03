<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Ghtcatalogue.' . $_EXTKEY,
	'Pi1',
	'Catalogue_ght'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Catalogue_ok_ght');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghtcatalogue_domain_model_produit', 'EXT:ght_catalogue/Resources/Private/Language/locallang_csh_tx_ghtcatalogue_domain_model_produit.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghtcatalogue_domain_model_produit');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghtcatalogue_domain_model_category', 'EXT:ght_catalogue/Resources/Private/Language/locallang_csh_tx_ghtcatalogue_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghtcatalogue_domain_model_category');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghtcatalogue_domain_model_marchand', 'EXT:ght_catalogue/Resources/Private/Language/locallang_csh_tx_ghtcatalogue_domain_model_marchand.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghtcatalogue_domain_model_marchand');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghtcatalogue_domain_model_caracteristiques', 'EXT:ght_catalogue/Resources/Private/Language/locallang_csh_tx_ghtcatalogue_domain_model_caracteristiques.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghtcatalogue_domain_model_caracteristiques');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghtcatalogue_domain_model_valeurcaracteristiques', 'EXT:ght_catalogue/Resources/Private/Language/locallang_csh_tx_ghtcatalogue_domain_model_valeurcaracteristiques.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghtcatalogue_domain_model_valeurcaracteristiques');
