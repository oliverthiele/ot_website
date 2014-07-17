/**
 * Page TSconfig
 *
 * @see http://docs.typo3.org/typo3cms/TSconfigReference/PageTsconfig/
 */

TCEFORM.pages {
	layout.disabled = 1
	php_tree_stop.disabled = 1

	# Remove the "Recycler"
	doctype.removeItems = 255

#	lastUpdated.disabled = 1
#	newUntil.disabled = 1
#
#	target.disabled = 1
#	no_cache.disabled = 1
#	cache_timeout.disabled = 1
#
#	abstract.disabled = 1
#	keywords.disabled = 1
#	author.disabled = 1
#	email.disabled = 1
#	description.disabled = 1
#
#	fe_login_mode.disabled = 1
#	module.disabled = 1
}

TCEFORM.tt_content {
	header_layout.altLabels.1 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:header_1
	header_layout.altLabels.2 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:header_2
	header_layout.altLabels.3 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:header_3
	header_layout.altLabels.4 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:header_4
	header_layout.altLabels.5 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:header_5
	header_layout.altLabels.100 = LLL:EXT:ot_website/Resources/Private/Language/locallang_db.xlf:hidden


	#header_layout.removeItems = 100
	#header_layout.addItems.6 = Überschrift 6
	#header_layout.addItems.100 = Verborgen

	CType.removeItems = bullets

	#sys_language_uid.disabled = 1
	#colPos.disabled = 1
	spaceBefore.disabled = 1
	spaceAfter.disabled = 1
	section_frame.disabled = 1
}
