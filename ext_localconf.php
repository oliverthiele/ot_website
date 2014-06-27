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
}
