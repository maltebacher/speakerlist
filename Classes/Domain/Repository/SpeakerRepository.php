<?php
namespace Mfb\Speakerlist\Domain\Repository;

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
 * The repository for Speakers
 */
class SpeakerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    public function findSpeakers() {
        $query = $this->createQuery();
        //$query->getQuerySettings()->setRespectStoragePage(FALSE);
        return $query->execute();
    }    

}
