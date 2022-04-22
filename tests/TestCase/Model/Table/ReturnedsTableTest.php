<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReturnedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReturnedsTable Test Case
 */
class ReturnedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReturnedsTable
     */
    protected $Returneds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Returneds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Returneds') ? [] : ['className' => ReturnedsTable::class];
        $this->Returneds = $this->getTableLocator()->get('Returneds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Returneds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReturnedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
