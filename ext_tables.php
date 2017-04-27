<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Typoblok.Typoblok',
            'Storyblok',
            'Storyblok'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Typoblok');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_typoblok_domain_model_story', 'EXT:typoblok/Resources/Private/Language/locallang_csh_tx_typoblok_domain_model_story.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_typoblok_domain_model_story');

    },
    $_EXTKEY
);
