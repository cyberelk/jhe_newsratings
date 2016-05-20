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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_JheNewsratings_Domain_Model_Data.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Ratings for News
 *
 * @author Jari-Hermann Ernst, M.A. <jari-hermann.ernst@bad-gmbh.de>
 */
class Tx_JheNewsratings_Domain_Model_DataTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_JheNewsratings_Domain_Model_Data
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_JheNewsratings_Domain_Model_Data();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getReferenceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setReferenceForStringSetsReference() { 
		$this->fixture->setReference('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getReference()
		);
	}
	
	/**
	 * @test
	 */
	public function getRatingReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRating()
		);
	}

	/**
	 * @test
	 */
	public function setRatingForIntegerSetsRating() { 
		$this->fixture->setRating(12);

		$this->assertSame(
			12,
			$this->fixture->getRating()
		);
	}
	
	/**
	 * @test
	 */
	public function getVotecountReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVotecount()
		);
	}

	/**
	 * @test
	 */
	public function setVotecountForIntegerSetsVotecount() { 
		$this->fixture->setVotecount(12);

		$this->assertSame(
			12,
			$this->fixture->getVotecount()
		);
	}
	
}
?>