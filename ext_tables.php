<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Mfb.Speakerlist',
            'Speakerlistfe',
            'Speaker List'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('speakerlist', 'Configuration/TypoScript', 'Speaker List');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_speakerlist_domain_model_speaker', 'EXT:speakerlist/Resources/Private/Language/locallang_csh_tx_speakerlist_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_speakerlist_domain_model_speaker');

    }
);
