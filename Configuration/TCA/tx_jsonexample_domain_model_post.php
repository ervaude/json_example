<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl'      => [
        'title'         => 'Post',
        'label'         => 'title',
        'tstamp'        => 'tstamp',
        'crdate'        => 'crdate',
        'cruser_id'     => 'cruser_id',
        'delete'        => 'deleted',
        'enablecolumns' => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'iconfile'      => 'EXT:json_example/Resources/Public/Icons/Extension.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, title, post_text, tags',
    ],
    'types'     => [
        '1' => [
            'showitem' => 'hidden, title, post_text, tags,'
            . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'
        ],
    ],
    'palettes'  => [
        '1' => ['showitem' => ''],
    ],
    'columns'   => [

        'hidden'    => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],

        'title' => [
            'exclude' => 1,
            'label'   => 'Title',
            'config'  => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'post_text' => [
            'exclude' => 1,
            'label'   => 'Text',
            'config'  => [
                'type' => 'text',
                'rows' => 6,
                'eval' => 'trim'
            ],
        ],
        'tags' => [
            'exclude' => 1,
            'label'   => 'Tags',
            'config'  => [
                'type' => 'select',
                'foreign_table' => 'tx_jsonexample_domain_model_tag',
                'MM' => 'tx_jsonexample_post_tag_mm',
                'size' => 10,
                'autoSizeMax' => 50,
                'maxitems' => 9999
            ],
        ],
    ],
];
