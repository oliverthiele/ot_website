<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
//\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
//	$_EXTKEY,
//	'Pi1',
//	'Website'
//);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Website');


$tempColumns = Array(
	'bootstrap_col_xs' => Array(
		'exclude' => 1,
		'label' => 'Extra small devices (<768px)',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', '0'),
				array('1/12', '1'),
				array('2/12', '2'),
				array('3/12', '3'),
				array('4/12', '4'),
				array('5/12', '5'),
				array('6/12', '6'),
				array('7/12', '7'),
				array('8/12', '8'),
				array('9/12', '9'),
				array('10/12', '10'),
				array('11/12', '11'),
				array('12/12', '12'),
			)
		)
	),
	'bootstrap_col_sm' => Array(
		'exclude' => 1,
		'label' => 'Small devices (Tablets ≥768px)',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', '0'),
				array('1/12', '1'),
				array('2/12', '2'),
				array('3/12', '3'),
				array('4/12', '4'),
				array('5/12', '5'),
				array('6/12', '6'),
				array('7/12', '7'),
				array('8/12', '8'),
				array('9/12', '9'),
				array('10/12', '10'),
				array('11/12', '11'),
				array('12/12', '12'),
			)
		)
	),
	'bootstrap_col_md' => Array(
		'exclude' => 1,
		'label' => 'Medium devices (Desktops ≥992px)',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', '0'),
				array('1/12', '1'),
				array('2/12', '2'),
				array('3/12', '3'),
				array('4/12', '4'),
				array('5/12', '5'),
				array('6/12', '6'),
				array('7/12', '7'),
				array('8/12', '8'),
				array('9/12', '9'),
				array('10/12', '10'),
				array('11/12', '11'),
				array('12/12', '12'),
			)
		)
	),
	'bootstrap_col_lg' => Array(
		'exclude' => 1,
		'label' => 'Large devices Desktops (≥1200px)',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', '0'),
				array('1/12', '1'),
				array('2/12', '2'),
				array('3/12', '3'),
				array('4/12', '4'),
				array('5/12', '5'),
				array('6/12', '6'),
				array('7/12', '7'),
				array('8/12', '8'),
				array('9/12', '9'),
				array('10/12', '10'),
				array('11/12', '11'),
				array('12/12', '12'),
			)
		)
	),
	'bootstrap_css' => Array(
		'exclude' => 1,
		'label' => 'CSS for outer <div>',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'max' => '255',
			'eval' => ''
		)
	),
	'bootstrap_css_inner' => Array(
		'exclude' => 1,
		'label' => 'CSS for inner <div>',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'max' => '255',
			'eval' => ''
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', ', --div--;Bootstrap, bootstrap_col_xs, bootstrap_col_sm, bootstrap_col_md, bootstrap_col_lg, bootstrap_css, bootstrap_css_inner', '', 'after:categories');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ot_website/Configuration/TypoScript/pageTSconfig.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ot_website/Configuration/TypoScript/userTSconfig.ts">');
