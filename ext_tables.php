<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OldGold.OldGold',
            'Addpost',
            'adPost'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OldGold.OldGold',
            'Showpost',
            'showPost'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('old_gold', 'Configuration/TypoScript', 'OldGoldApplication');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_adpost', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_adpost.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_adpost');

    }
);
