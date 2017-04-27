<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Typoblok.Typoblok',
            'Storyblok',
            [
                'Story' => 'list'
            ],
            // non-cacheable actions
            [
                'Story' => ''
            ]
        );

		// wizards
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						storyblok {
							icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_storyblok.svg
							title = LLL:EXT:typoblok/Resources/Private/Language/locallang_db.xlf:tx_typoblok_domain_model_storyblok
							description = LLL:EXT:typoblok/Resources/Private/Language/locallang_db.xlf:tx_typoblok_domain_model_storyblok.description
							tt_content_defValues {
								CType = list
								list_type = typoblok_storyblok
							}
						}
					}
					show = *
				}
		   }'
		);
    },
    $_EXTKEY
);
