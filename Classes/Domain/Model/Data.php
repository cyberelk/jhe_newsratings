<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Jari-Hermann Ernst, M.A. <jari-hermann.ernst@bad-gmbh.de>, BAD GmbH
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package jhe_newsratings
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_JheNewsratings_Domain_Model_Data extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * reference
	 *
	 * @var string
	 */
	protected $reference;

	/**
	 * rating
	 *
	 * @var integer
	 */
	protected $rating;

	/**
	 * votecount
	 *
	 * @var integer
	 */
	protected $votecount;

	/**
	 * Returns the reference
	 *
	 * @return string $reference
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets the reference
	 *
	 * @param string $reference
	 * @return void
	 */
	public function setReference($reference) {
		$this->reference = $reference;
	}

	/**
	 * Returns the rating
	 *
	 * @return integer $rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Sets the rating
	 *
	 * @param integer $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

	/**
	 * Returns the votecount
	 *
	 * @return integer $votecount
	 */
	public function getVotecount() {
		return $this->votecount;
	}

	/**
	 * Sets the votecount
	 *
	 * @param integer $votecount
	 * @return void
	 */
	public function setVotecount($votecount) {
		$this->votecount = $votecount;
	}

}
?>