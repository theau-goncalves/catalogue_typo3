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
 * MarchandController
 */
class MarchandController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * marchandRepository
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Repository\MarchandRepository
     * @inject
     */
    protected $marchandRepository = NULL;

    /**
     * marchandRepository
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Repository\ProduitRepository
     * @inject
     */
    protected $produitRepository = NULL;
    
    /**
     * action show
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchand
     * @return void
     */
    public function showAction(\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchand)
    {
        $this->view->assign('marchand', $marchand);
       // $produits = $this->produitRepository->findAll();
    }
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $marchands = $this->marchandRepository->findAll();
        $this->view->assign('marchands', $marchands);
    }

}