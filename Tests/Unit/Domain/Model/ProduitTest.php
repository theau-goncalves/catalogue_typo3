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
 * Test case for class \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Hubert Moncenis 
 * @author Gautier Maire 
 * @author Théau Goncalves 
 */
class ProduitTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateSortieReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDateSortie()
		);
	}

	/**
	 * @test
	 */
	public function setDateSortieForDateTimeSetsDateSortie()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateSortie($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateSortie',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPrixReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getPrix()
		);
	}

	/**
	 * @test
	 */
	public function setPrixForFloatSetsPrix()
	{
		$this->subject->setPrix(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'prix',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getImgReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImg()
		);
	}

	/**
	 * @test
	 */
	public function setImgForFileReferenceSetsImg()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImg($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'img',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForCategorySetsCategory()
	{
		$categoryFixture = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Category();
		$this->subject->setCategory($categoryFixture);

		$this->assertAttributeEquals(
			$categoryFixture,
			'category',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPointsDeVenteReturnsInitialValueForMarchand()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPointsDeVente()
		);
	}

	/**
	 * @test
	 */
	public function setPointsDeVenteForObjectStorageContainingMarchandSetsPointsDeVente()
	{
		$pointsDeVente = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$objectStorageHoldingExactlyOnePointsDeVente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePointsDeVente->attach($pointsDeVente);
		$this->subject->setPointsDeVente($objectStorageHoldingExactlyOnePointsDeVente);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePointsDeVente,
			'pointsDeVente',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPointsDeVenteToObjectStorageHoldingPointsDeVente()
	{
		$pointsDeVente = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$pointsDeVenteObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$pointsDeVenteObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($pointsDeVente));
		$this->inject($this->subject, 'pointsDeVente', $pointsDeVenteObjectStorageMock);

		$this->subject->addPointsDeVente($pointsDeVente);
	}

	/**
	 * @test
	 */
	public function removePointsDeVenteFromObjectStorageHoldingPointsDeVente()
	{
		$pointsDeVente = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$pointsDeVenteObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$pointsDeVenteObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($pointsDeVente));
		$this->inject($this->subject, 'pointsDeVente', $pointsDeVenteObjectStorageMock);

		$this->subject->removePointsDeVente($pointsDeVente);

	}

	/**
	 * @test
	 */
	public function getMarchantReturnsInitialValueForMarchand()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getMarchant()
		);
	}

	/**
	 * @test
	 */
	public function setMarchantForObjectStorageContainingMarchandSetsMarchant()
	{
		$marchant = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$objectStorageHoldingExactlyOneMarchant = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneMarchant->attach($marchant);
		$this->subject->setMarchant($objectStorageHoldingExactlyOneMarchant);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneMarchant,
			'marchant',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addMarchantToObjectStorageHoldingMarchant()
	{
		$marchant = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$marchantObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$marchantObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($marchant));
		$this->inject($this->subject, 'marchant', $marchantObjectStorageMock);

		$this->subject->addMarchant($marchant);
	}

	/**
	 * @test
	 */
	public function removeMarchantFromObjectStorageHoldingMarchant()
	{
		$marchant = new \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand();
		$marchantObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$marchantObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($marchant));
		$this->inject($this->subject, 'marchant', $marchantObjectStorageMock);

		$this->subject->removeMarchant($marchant);

	}
}
