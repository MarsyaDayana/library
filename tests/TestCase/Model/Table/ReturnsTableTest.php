<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReturnsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReturnsTable Test Case
 */
class ReturnsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReturnsTable
     */
    protected $Returns;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Returns',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Returns') ? [] : ['className' => ReturnsTable::class];
        $this->Returns = $this->getTableLocator()->get('Returns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Returns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReturnsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
