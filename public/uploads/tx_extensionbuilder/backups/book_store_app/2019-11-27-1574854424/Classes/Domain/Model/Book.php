<?php
namespace KunalHarkare\BookStoreApp\Domain\Model;


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
 * Book
 */
class Book extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * chapter
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Chapter>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $chapter = null;

    /**
     * isbn
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $isbn = '';

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * blurb
     * 
     * @var string
     */
    protected $blurb = '';

    /**
     * price
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0.0;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * pages
     * 
     * @var int
     */
    protected $pages = 0;

    /**
     * author
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Author>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $author = null;

    /**
     * topic
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Topic>
     */
    protected $topic = null;

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * publisher
     * 
     * @var \KunalHarkare\BookStoreApp\Domain\Model\Publisher
     */
    protected $publisher = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->image = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->author = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->topic = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the isbn
     * 
     * @return string $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Sets the isbn
     * 
     * @param string $isbn
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the blurb
     * 
     * @return string $blurb
     */
    public function getBlurb()
    {
        return $this->blurb;
    }

    /**
     * Sets the blurb
     * 
     * @param string $blurb
     * @return void
     */
    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Adds a Author
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Author $author
     * @return void
     */
    public function addAuthor(\KunalHarkare\BookStoreApp\Domain\Model\Author $author)
    {
        $this->author->attach($author);
    }

    /**
     * Removes a Author
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Author $authorToRemove The Author to be removed
     * @return void
     */
    public function removeAuthor(\KunalHarkare\BookStoreApp\Domain\Model\Author $authorToRemove)
    {
        $this->author->detach($authorToRemove);
    }

    /**
     * Returns the author
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Author> $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Author> $author
     * @return void
     */
    public function setAuthor(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $author)
    {
        $this->author = $author;
    }

    /**
     * Adds a Chapter
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Chapter $chapter
     * @return void
     */
    public function addChapter(\KunalHarkare\BookStoreApp\Domain\Model\Chapter $chapter)
    {
        $this->chapter->attach($chapter);
    }

    /**
     * Removes a Chapter
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Chapter $chapterToRemove The Chapter to be removed
     * @return void
     */
    public function removeChapter(\KunalHarkare\BookStoreApp\Domain\Model\Chapter $chapterToRemove)
    {
        $this->chapter->detach($chapterToRemove);
    }

    /**
     * Returns the chapter
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Chapter> $chapter
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Sets the chapter
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Chapter> $chapter
     * @return void
     */
    public function setChapter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $chapter)
    {
        $this->chapter = $chapter;
    }

    /**
     * Adds a Topic
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function addTopic(\KunalHarkare\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->topic->attach($topic);
    }

    /**
     * Removes a Topic
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Topic $topicToRemove The Topic to be removed
     * @return void
     */
    public function removeTopic(\KunalHarkare\BookStoreApp\Domain\Model\Topic $topicToRemove)
    {
        $this->topic->detach($topicToRemove);
    }

    /**
     * Returns the topic
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Topic> $topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets the topic
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\KunalHarkare\BookStoreApp\Domain\Model\Topic> $topic
     * @return void
     */
    public function setTopic(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image->attach($image);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->image->detach($imageToRemove);
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the publisher
     * 
     * @return \KunalHarkare\BookStoreApp\Domain\Model\Publisher $publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets the publisher
     * 
     * @param \KunalHarkare\BookStoreApp\Domain\Model\Publisher $publisher
     * @return void
     */
    public function setPublisher(\KunalHarkare\BookStoreApp\Domain\Model\Publisher $publisher)
    {
        $this->publisher = $publisher;
    }
}
