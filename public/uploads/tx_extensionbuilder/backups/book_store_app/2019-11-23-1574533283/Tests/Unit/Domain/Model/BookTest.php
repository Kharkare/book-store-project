<?php
namespace KunalHarkare\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kunal Harkare 
 */
class BookTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \KunalHarkare\BookStoreApp\Domain\Model\Book
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \KunalHarkare\BookStoreApp\Domain\Model\Book();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIsbnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIsbn()
        );
    }

    /**
     * @test
     */
    public function setIsbnForStringSetsIsbn()
    {
        $this->subject->setIsbn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'isbn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBlurbReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBlurb()
        );
    }

    /**
     * @test
     */
    public function setBlurbForStringSetsBlurb()
    {
        $this->subject->setBlurb('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'blurb',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForAuthor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForObjectStorageContainingAuthorSetsAuthor()
    {
        $author = new \KunalHarkare\BookStoreApp\Domain\Model\Author();
        $objectStorageHoldingExactlyOneAuthor = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAuthor->attach($author);
        $this->subject->setAuthor($objectStorageHoldingExactlyOneAuthor);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAuthor,
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAuthorToObjectStorageHoldingAuthor()
    {
        $author = new \KunalHarkare\BookStoreApp\Domain\Model\Author();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->addAuthor($author);
    }

    /**
     * @test
     */
    public function removeAuthorFromObjectStorageHoldingAuthor()
    {
        $author = new \KunalHarkare\BookStoreApp\Domain\Model\Author();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->removeAuthor($author);
    }

    /**
     * @test
     */
    public function getChapterReturnsInitialValueForChapter()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getChapter()
        );
    }

    /**
     * @test
     */
    public function setChapterForObjectStorageContainingChapterSetsChapter()
    {
        $chapter = new \KunalHarkare\BookStoreApp\Domain\Model\Chapter();
        $objectStorageHoldingExactlyOneChapter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneChapter->attach($chapter);
        $this->subject->setChapter($objectStorageHoldingExactlyOneChapter);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneChapter,
            'chapter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addChapterToObjectStorageHoldingChapter()
    {
        $chapter = new \KunalHarkare\BookStoreApp\Domain\Model\Chapter();
        $chapterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $chapterObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($chapter));
        $this->inject($this->subject, 'chapter', $chapterObjectStorageMock);

        $this->subject->addChapter($chapter);
    }

    /**
     * @test
     */
    public function removeChapterFromObjectStorageHoldingChapter()
    {
        $chapter = new \KunalHarkare\BookStoreApp\Domain\Model\Chapter();
        $chapterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $chapterObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($chapter));
        $this->inject($this->subject, 'chapter', $chapterObjectStorageMock);

        $this->subject->removeChapter($chapter);
    }

    /**
     * @test
     */
    public function getTopicReturnsInitialValueForTopic()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTopic()
        );
    }

    /**
     * @test
     */
    public function setTopicForObjectStorageContainingTopicSetsTopic()
    {
        $topic = new \KunalHarkare\BookStoreApp\Domain\Model\Topic();
        $objectStorageHoldingExactlyOneTopic = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTopic->attach($topic);
        $this->subject->setTopic($objectStorageHoldingExactlyOneTopic);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTopic,
            'topic',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTopicToObjectStorageHoldingTopic()
    {
        $topic = new \KunalHarkare\BookStoreApp\Domain\Model\Topic();
        $topicObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $topicObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($topic));
        $this->inject($this->subject, 'topic', $topicObjectStorageMock);

        $this->subject->addTopic($topic);
    }

    /**
     * @test
     */
    public function removeTopicFromObjectStorageHoldingTopic()
    {
        $topic = new \KunalHarkare\BookStoreApp\Domain\Model\Topic();
        $topicObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $topicObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($topic));
        $this->inject($this->subject, 'topic', $topicObjectStorageMock);

        $this->subject->removeTopic($topic);
    }
}
