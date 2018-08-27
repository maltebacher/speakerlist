<?php
namespace Mfb\Speakerlist\Controller;

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
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * speakerRepository
     *
     * @var \Mfb\Speakerlist\Domain\Repository\SpeakerRepository
     * @inject
     */
    protected $speakerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $speakers = $this->speakerRepository->findAll();
        $this->view->assign('speakers', $speakers);
    }
}
