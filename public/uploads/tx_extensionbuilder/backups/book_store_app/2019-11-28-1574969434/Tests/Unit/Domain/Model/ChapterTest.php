<?php
namespace KunalHarkare\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kunal Harkare 
 */
class ChapterTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \KunalHarkare\BookStoreApp\Domain\Model\Chapter
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \KunalHarkare\BookStoreApp\Domain\Model\Chapter();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
