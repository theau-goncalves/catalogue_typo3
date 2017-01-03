<?php

namespace Ghtcatalogue\GhtCatalogue\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Hubert Moncenis
 *           Gautier Maire
 *           Théau Goncalves
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
 * Test case for class \Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Hubert Moncenis 
 * @author Gautier Maire 
 * @author Théau Goncalves 
 */
class ValeurCaracteristiquesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getValeurReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getValeur()
		);
	}

	/**
	 * @test
	 */
	public function setValeurForStringSetsValeur()
	{
		$this->subject->setValeur('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'valeur',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProduitReturnsInitialValueForProduit()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getProduit()
		);
	}

	/**
	 * @test
	 */
	public function setProduitForProduitSetsProduit()
	{
		$produitFixture = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit();
		$this->subject->setProduit($produitFixture);

		$this->assertAttributeEquals(
			$produitFixture,
			'produit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCaracteristiqueReturnsInitialValueForCaracteristiques()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCaracteristique()
		);
	}

	/**
	 * @test
	 */
	public function setCaracteristiqueForCaracteristiquesSetsCaracteristique()
	{
		$caracteristiqueFixture = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Caracteristiques();
		$this->subject->setCaracteristique($caracteristiqueFixture);

		$this->assertAttributeEquals(
			$caracteristiqueFixture,
			'caracteristique',
			$this->subject
		);
	}
}
