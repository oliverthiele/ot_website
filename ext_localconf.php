<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/**
 * @see https://github.com/georgringer/belayout_fileprovider
 * @see http://wiki.typo3.org/TYPO3_CMS_6.2#Backend_Layouts
 */
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['file'] = 'OliverThiele\\OtWebsite\\Provider\\FileProvider';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutFileProvider']['dir'][] = 'EXT:ot_website/Configuration/BackendLayouts/';

	// Call hook for manipulation of frontend user object
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY). 'Classes/Backend/View/OtWebsiteTtContentDrawItem.php:OtWebsiteTtContentDrawItem';
}

