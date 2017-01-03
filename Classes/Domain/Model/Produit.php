<?php
namespace Ghtcatalogue\GhtCatalogue\Domain\Model;

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
 * Produit
 */
class Produit extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * dateSortie
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateSortie = null;
    
    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';
    
    /**
     * prix
     *
     * @var float
     * @validate NotEmpty
     */
    protected $prix = 0.0;
    
    /**
     * img
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $img = null;
    
    /**
     * category
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Model\Category
     */
    protected $category = null;
    
    /**
     * pointsDeVente
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand>
     */
    protected $pointsDeVente = null;
    
    /**
     * marchant
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand>
     */
    protected $marchant = null;
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the dateSortie
     *
     * @return \DateTime $dateSortie
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    
    /**
     * Sets the dateSortie
     *
     * @param \DateTime $dateSortie
     * @return void
     */
    public function setDateSortie(\DateTime $dateSortie)
    {
        $this->dateSortie = $dateSortie;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the prix
     *
     * @return float $prix
     */
    public function getPrix()
    {
        return $this->prix;
    }
    
    /**
     * Sets the prix
     *
     * @param float $prix
     * @return void
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    
    /**
     * Returns the img
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $img
     */
    public function getImg()
    {
        return $this->img;
    }
    
    /**
     * Sets the img
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $img
     * @return void
     */
    public function setImg(\TYPO3\CMS\Extbase\Domain\Model\FileReference $img)
    {
        $this->img = $img;
    }
    
    /**
     * Returns the category
     *
     * @return \Ghtcatalogue\GhtCatalogue\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Ghtcatalogue\GhtCatalogue\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->pointsDeVente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->marchant = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a Marchand
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $pointsDeVente
     * @return void
     */
    public function addPointsDeVente(\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $pointsDeVente)
    {
        $this->pointsDeVente->attach($pointsDeVente);
    }
    
    /**
     * Removes a Marchand
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $pointsDeVenteToRemove The Marchand to be removed
     * @return void
     */
    public function removePointsDeVente(\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $pointsDeVenteToRemove)
    {
        $this->pointsDeVente->detach($pointsDeVenteToRemove);
    }
    
    /**
     * Returns the pointsDeVente
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand> $pointsDeVente
     */
    public function getPointsDeVente()
    {
        return $this->pointsDeVente;
    }
    
    /**
     * Sets the pointsDeVente
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand> $pointsDeVente
     * @return void
     */
    public function setPointsDeVente(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pointsDeVente)
    {
        $this->pointsDeVente = $pointsDeVente;
    }
    
    /**
     * Adds a Marchand
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchant
     * @return void
     */
    public function addMarchant(\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchant)
    {
        $this->marchant->attach($marchant);
    }
    
    /**
     * Removes a Marchand
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchantToRemove The Marchand to be removed
     * @return void
     */
    public function removeMarchant(\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand $marchantToRemove)
    {
        $this->marchant->detach($marchantToRemove);
    }
    
    /**
     * Returns the marchant
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand> $marchant
     */
    public function getMarchant()
    {
        return $this->marchant;
    }
    
    /**
     * Sets the marchant
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtcatalogue\GhtCatalogue\Domain\Model\Marchand> $marchant
     * @return void
     */
    public function setMarchant(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $marchant)
    {
        $this->marchant = $marchant;
    }

}