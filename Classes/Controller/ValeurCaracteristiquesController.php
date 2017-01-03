<?php
namespace Ghtcatalogue\GhtCatalogue\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Hubert Moncenis
 *           Gautier Maire
 *           Théau Goncalves
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
 * ValeurCaracteristiquesController
 */
class ValeurCaracteristiquesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * valeurCaracteristiquesRepository
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Repository\ValeurCaracteristiquesRepository
     * @inject
     */
    protected $valeurCaracteristiquesRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $valeurCaracteristiques = $this->valeurCaracteristiquesRepository->findAll();
        $this->view->assign('valeurCaracteristiques', $valeurCaracteristiques);
    }
    
    /**
     * action show
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques $valeurCaracteristiques
     * @return void
     */
    public function showAction(\Ghtcatalogue\GhtCatalogue\Domain\Model\ValeurCaracteristiques $valeurCaracteristiques)
    {
        $this->view->assign('valeurCaracteristiques', $valeurCaracteristiques);
    }

}