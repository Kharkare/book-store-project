<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('book_store_app', 'Configuration/TypoScript', 'Book Store App');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bookstoreapp_domain_model_author', 'EXT:book_store_app/Resources/Private/Language/locallang_csh_tx_bookstoreapp_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bookstoreapp_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bookstoreapp_domain_model_topic', 'EXT:book_store_app/Resources/Private/Language/locallang_csh_tx_bookstoreapp_domain_model_topic.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bookstoreapp_domain_model_topic');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bookstoreapp_domain_model_chapter', 'EXT:book_store_app/Resources/Private/Language/locallang_csh_tx_bookstoreapp_domain_model_chapter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bookstoreapp_domain_model_chapter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bookstoreapp_domain_model_book', 'EXT:book_store_app/Resources/Private/Language/locallang_csh_tx_bookstoreapp_domain_model_book.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bookstoreapp_domain_model_book');

    }
);