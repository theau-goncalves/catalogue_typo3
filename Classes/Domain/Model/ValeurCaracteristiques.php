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
 * ValeurCaracteristiques
 */
class ValeurCaracteristiques extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * valeur
     *
     * @var string
     * @validate NotEmpty
     */
    protected $valeur = '';
    
    /**
     * produit
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit
     */
    protected $produit = null;
    
    /**
     * caracteristique
     *
     * @var \Ghtcatalogue\GhtCatalogue\Domain\Model\Caracteristiques
     */
    protected $caracteristique = null;
    
    /**
     * Returns the valeur
     *
     * @return string $valeur
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    
    /**
     * Sets the valeur
     *
     * @param string $valeur
     * @return void
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }
    
    /**
     * Returns the produit
     *
     * @return \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit $produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
    
    /**
     * Sets the produit
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Produit $produit
     * @return void
     */
    public function setProduit(\Ghtcatalogue\GhtCatalogue\Domain\Model\Produit $produit)
    {
        $this->produit = $produit;
    }
    
    /**
     * Returns the caracteristique
     *
     * @return \Ghtcatalogue\GhtCatalogue\Domain\Model\Caracteristiques $caracteristique
     */
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }
    
    /**
     * Sets the caracteristique
     *
     * @param \Ghtcatalogue\GhtCatalogue\Domain\Model\Caracteristiques $caracteristique
     * @return void
     */
    public function setCaracteristique(\Ghtcatalogue\GhtCatalogue\Domain\Model\Caracteristiques $caracteristique)
    {
        $this->caracteristique = $caracteristique;
    }

}