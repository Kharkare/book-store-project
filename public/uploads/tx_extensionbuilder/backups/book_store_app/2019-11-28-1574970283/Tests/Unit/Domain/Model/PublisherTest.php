<?php
namespace KunalHarkare\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kunal Harkare <kunal.harkare@hof-university.de>
 */
class PublisherTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \KunalHarkare\BookStoreApp\Domain\Model\Publisher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \KunalHarkare\BookStoreApp\Domain\Model\Publisher();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
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
    public function getCountryReturnsInitialValueForCountry()
    {
        self::assertEquals(
            null,
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForCountrySetsCountry()
    {
        $countryFixture = new \KunalHarkare\BookStoreApp\Domain\Model\Country();
        $this->subject->setCountry($countryFixture);

        self::assertAttributeEquals(
            $countryFixture,
            'country',
            $this->subject
        );
    }
}
