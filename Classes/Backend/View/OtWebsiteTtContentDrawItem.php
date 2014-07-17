<?php

/**
 * Class which hooks into tx_cms_layout and do additional tt_content_drawItem processing.
 *
 * @package TYPO3
 * @subpackage ot_website
 * @author Oliver Thiele
 */
class OtWebsiteTtContentDrawItem implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface {

	/**
	 * Preprocesses the preview rendering of a content element.
	 *
	 * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject :  Calling parent object
	 * @param boolean $drawItem :      Whether to draw the item using the default functionalities
	 * @param string $headerContent : Header content
	 * @param string $itemContent :   Item content
	 * @param array $row :           Record row of tt_content
	 * @return void
	 */
	public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row) {
		$headerContent = $this->getBootstrapInfos($row) . $headerContent;

		// Show only type
		if($row['CType'] == 'div') {
			# $drawItem = FALSE;
			$headerContent = $this->getBootstrapInfos($row);
			$itemContent = '';
		}
	}

	/**
	 * Bootstrap info of a content element.
	 *
	 * @param array $row : Record row of tt_content
	 * @return string
	 */
	private function getBootstrapInfos($row) {
		$html = '<table style="background-color: #eee;border-collapse: collapse; width: 100%;margin-bottom: 1em;" border="1">';
		if($row['bootstrap_css'] != '') {
			$html .= '	<tr><th style="padding: 2px;text-align: left; width: 160px;">CSS (outer &lt;div&gt;)</th><td style="padding: 2px;"> ' . $row['bootstrap_css'] . '</td></tr>';
		}
		if($row['bootstrap_css_inner'] != '') {
			$html .= '<tr><th style="padding: 2px;text-align: left;width: 160px;">CSS (inner &lt;div&gt;)</th><td style="padding: 2px;"> ' . $row['bootstrap_css_inner'] . '</td></tr>';
		}

		$html .= '<tr><th style="padding: 2px;text-align: left;width: 160px;">Bootstrap columns</th><td style="padding: 2px;"><b>XS</b>: ' . $row['bootstrap_col_xs'] .
			' <b>SM:</b> ' . $row['bootstrap_col_sm'] .
			' <b>MD:</b> ' . $row['bootstrap_col_md'] .
			' <b>LG:</b> ' . $row['bootstrap_col_lg'] .
			'</td></tr></table>';
		return $html;
	}
}
