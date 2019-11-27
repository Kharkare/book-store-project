<?php
namespace KunalHarkare\BookStoreApp\Controller;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Kunal Harkare
 *
 ***/
/**
 * BookController
 */
class BookController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookRepository
     * 
     * @var \KunalHarkare\BookStoreApp\Domain\Repository\BookRepository
     */
    protected $bookRepository = null;

    /**
     * @param \KunalHarkare\BookStoreApp\Domain\Repository\BookRepository $bookRepository
     */
    public function injectBookRepository(\KunalHarkare\BookStoreApp\Domain\Repository\BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $books = $this->bookRepository->findAll();
        $this->view->assign('books', $books);
    }

    /**
     * action show
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function showAction(\KunalHarkare\BookStoreApp\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }
}
