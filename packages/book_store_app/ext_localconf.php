<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'KunalHarkare.BookStoreApp',
            'Book',
            [
                'Author' => 'list, show, new, create, edit, update, delete',
                'Topic' => 'list, show, new, create, edit, update, delete',
                'Publisher' => 'list, show, new, create, edit, update, delete',
                'Book' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Author' => 'create, update, delete',
                'Topic' => 'create, update, delete',
                'Publisher' => 'create, update, delete',
                'Book' => 'create, update, delete',
                'Country' => 'create, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        book {
                            iconIdentifier = book_store_app-plugin-book
                            title = LLL:EXT:book_store_app/Resources/Private/Language/locallang_db.xlf:tx_book_store_app_book.name
                            description = LLL:EXT:book_store_app/Resources/Private/Language/locallang_db.xlf:tx_book_store_app_book.description
                            tt_content_defValues {
                                CType = list
                                list_type = bookstoreapp_book
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'book_store_app-plugin-book',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:book_store_app/Resources/Public/Icons/user_plugin_book.svg']
			);
		
    }
);
