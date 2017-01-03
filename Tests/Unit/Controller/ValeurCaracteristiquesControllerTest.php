<?php
namespace Ghtcatalogue\GhtCatalogue\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Hubert Moncenis 
 *  			Gautier Maire 
 *  			Théau Goncalves 
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
 * Test case for class Ghtcatalogue\GhtCatalogue\Controller\ValeurCaracteristiquesController.
 *
 * @author Hubert Moncenis 
 * @author Gautier Maire 
 * @author Théau Goncalves 
 */
class ValeurCaracteristiquesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Ghtcatalogue\GhtCatalogue\Controller\ValeurCaracteristiquesController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Ghtcatalogue\\GhtCatalogue\\Controller\\ValeurCaracteristiquesController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllValeurCaracteristiquessFromRepositoryAndAssignsThemToView()
	{

		$allValeurCaracteristiquess = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$valeurCaracteristiquesRepository = $this->getMock('Ghtcatalogue\\GhtCatalogue\\Domain\\Repository\\ValeurCaracteristiquesRepository', array('findAll'), array(), '', FALSE);
		$valeurCaracteristiquesRepository->expects($this->once())->method('findAll')->will($this->returnValue($allValeurCaracteristiquess));
		$this->inject($this->subject, 'valeurCaracteristiquesRepository', $valeurCaracteristiquesRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('valeurCaracteristiquess', $allValeurCaracteristiquess);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenValeurCaracteristiquesToView()
	{
		$valeurCaracteristiques = new \Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('valeurCaracteristiques', $valeurCaracteristiques);

		$this->subject->showAction($valeurCaracteristiques);
	}
}
