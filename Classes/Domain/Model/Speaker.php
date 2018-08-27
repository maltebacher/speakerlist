<?php
namespace Mfb\Speakerlist\Domain\Model;

/***
 *
 * This file is part of the "Speaker List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Malte Bacher <email@inproject.hidden>, Malte Bacher
 *
 ***/

/**
 * Speaker
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected $name;
 
    public function getName() {
        return $this->name;
    }
    
}
