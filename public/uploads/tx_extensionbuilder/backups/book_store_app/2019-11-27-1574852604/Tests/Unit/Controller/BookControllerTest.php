<?php
namespace KunalHarkare\BookStoreApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kunal Harkare 
 */
class BookControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \KunalHarkare\BookStoreApp\Controller\BookController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\KunalHarkare\BookStoreApp\Controller\BookController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllBooksFromRepositoryAndAssignsThemToView()
    {

        $allBooks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $bookRepository = $this->getMockBuilder(\KunalHarkare\BookStoreApp\Domain\Repository\BookRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $bookRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBooks));
        $this->inject($this->subject, 'bookRepository', $bookRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('books', $allBooks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBookToView()
    {
        $book = new \KunalHarkare\BookStoreApp\Domain\Model\Book();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('book', $book);

        $this->subject->showAction($book);
    }
}