<?php
/***************************************************************
 * Copyright notice
 *
 * (c) 2013 AOE media (dev@aoemedia.de)
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Defines visibility element type for news record.
 *
 * @author Chetan Thapliyal <chetan.thapliyal@aoemmedia.de>
 */
class Tx_ExtLanguagevisibility_Element_News extends Tx_ExtLanguagevisibility_Element_Base {

	/**
	 * Returns which field in the language should be used to read the default visibility
	 *
	 * @return string
	 **/
	function getFieldToUseForDefaultVisibility() {
		return 'tt_news';
	}

	/**
	 * Gets language fallback order for a news record.
	 *
	 * @param  tx_languagevisibility_language $language
	 * @return array
	 */
	public function getFallbackOrder(tx_languagevisibility_language $language) {
		return $language->getFallbackOrderTTNewsElement($this);
	}
}
