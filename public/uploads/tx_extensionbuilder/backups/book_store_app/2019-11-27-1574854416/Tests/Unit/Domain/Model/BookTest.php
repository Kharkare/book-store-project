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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPagesReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPages()
        );
    }

    /**
     * @test
     */
    public function setPagesForIntSetsPages()
    {
        $this->subject->setPages(12);

        self::assertAttributeEquals(
            12,
            'pages',
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

    /**
     * @test
     */
    public function getPublisherReturnsInitialValueForPublisher()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPublisher()
        );
    }

    /**
     * @test
     */
    public function setPublisherForObjectStorageContainingPublisherSetsPublisher()
    {
        $publisher = new \KunalHarkare\BookStoreApp\Domain\Model\Publisher();
        $objectStorageHoldingExactlyOnePublisher = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePublisher->attach($publisher);
        $this->subject->setPublisher($objectStorageHoldingExactlyOnePublisher);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePublisher,
            'publisher',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPublisherToObjectStorageHoldingPublisher()
    {
        $publisher = new \KunalHarkare\BookStoreApp\Domain\Model\Publisher();
        $publisherObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publisherObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($publisher));
        $this->inject($this->subject, 'publisher', $publisherObjectStorageMock);

        $this->subject->addPublisher($publisher);
    }

    /**
     * @test
     */
    public function removePublisherFromObjectStorageHoldingPublisher()
    {
        $publisher = new \KunalHarkare\BookStoreApp\Domain\Model\Publisher();
        $publisherObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publisherObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($publisher));
        $this->inject($this->subject, 'publisher', $publisherObjectStorageMock);

        $this->subject->removePublisher($publisher);
    }
}
