<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DanielGoerz.' . $_EXTKEY,
    'json_tag',
    [
        'Tag' => 'list, show',
    ],
    []
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DanielGoerz.' . $_EXTKEY,
    'json_post',
    [
        'Post' => 'list, show',
    ],
    []
);

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
    $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fixedPostVars']['api'] = [
        [
            'GETvar'   => 'type',
            'valueMap' => [
                'tag' => 1452982642,
                'post' => 1452982643
            ],
        ],
        [
            'cond'        => [
                'prevValueInList' => '1452982642'
            ],
            'GETvar'      => 'tx_jsonexample_json_tag[tag]',
            'lookUpTable' => [
                'table'       => 'tx_jsonexample_domain_model_tag',
                'id_field'    => 'uid',
                'alias_field' => 'uid'
            ],
            'optional'    => true,
        ],
        [
            'cond'        => [
                'prevValueInList' => '1452982643'
            ],
            'GETvar'      => 'tx_jsonexample_json_post[post]',
            'lookUpTable' => [
                'table'       => 'tx_jsonexample_domain_model_post',
                'id_field'    => 'uid',
                'alias_field' => 'uid'
            ],
            'optional'    => true,
        ]
    ];
    $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['fixedPostVars'][$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['pagePath']['rootpage_id'] ?: 1] = 'api';
}
