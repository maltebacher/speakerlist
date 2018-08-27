<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mfb.Speakerlist',
            'Speakerlistfe',
            [
                'Speaker' => 'list'
            ],
            // non-cacheable actions
            [
                'Speaker' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    speakerlistfe {
                        iconIdentifier = speakerlist-plugin-speakerlistfe
                        title = LLL:EXT:speakerlist/Resources/Private/Language/locallang_db.xlf:tx_speakerlist_speakerlistfe.name
                        description = LLL:EXT:speakerlist/Resources/Private/Language/locallang_db.xlf:tx_speakerlist_speakerlistfe.description
                        tt_content_defValues {
                            CType = list
                            list_type = speakerlist_speakerlistfe
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'speakerlist-plugin-speakerlistfe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:speakerlist/Resources/Public/Icons/user_plugin_speakerlistfe.svg']
			);
		
    }
);
