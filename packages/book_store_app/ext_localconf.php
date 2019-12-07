<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'KunalHarkare.BookStoreApp',
            'Book',
            [
                'Book' => 'list, show, new, create, edit, update, delete',
                'Author' => 'list, show, new, create, edit, update, delete',
                'Topic' => 'list, show, new, create, edit, update, delete',
                'Publisher' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Book' => 'list, show, new, create, edit, update, delete',
                'Author' => 'list, show, new, create, edit, update, delete',
                'Topic' => 'list, show, new, create, edit, update, delete',
                'Publisher' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'KunalHarkare.BookStoreApp',
            'Authors',
            [
                'Author' => 'list, show, new, create, edit, update, delete',
                'Publisher' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Author' => 'list, show, new, create, edit, update, delete',
                'Publisher' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'KunalHarkare.BookStoreApp',
            'Topics',
            [
                'Topic' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Topic' => 'list, show, new, create, edit, update, delete'
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
                        authors {
                            iconIdentifier = book_store_app-plugin-authors
                            title = Authors
                            description = Display List of all authors
                            tt_content_defValues {
                                CType = list
                                list_type = bookstoreapp_authors
                            }
                        }
                        topics {
                            iconIdentifier = book_store_app-plugin-topics
                            title = Topics
                            description = Display List of all topics
                            tt_content_defValues {
                                CType = list
                                list_type = bookstoreapp_topics
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

            $iconRegistry->registerIcon(
                'book_store_app-plugin-authors',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:book_store_app/Resources/Public/Icons/user_plugin_book.svg']
            );

            $iconRegistry->registerIcon(
                'book_store_app-plugin-topics',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:book_store_app/Resources/Public/Icons/user_plugin_book.svg']
            );
		
    }
);
