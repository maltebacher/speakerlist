<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "speakerlist"
 *
 * Auto generated by Extension Builder 2018-08-27
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Speaker List',
    'description' => 'Lists all Speakers and corresponding events according to sf_event_mgt.',
    'category' => 'plugin',
    'author' => 'Malte Bacher',
    'author_email' => 'email@inproject.hidden',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.19-9.5.99',
            'sf_event_mgt' => '3.0.5-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
