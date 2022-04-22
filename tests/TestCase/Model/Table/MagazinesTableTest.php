<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MagazinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MagazinesTable Test Case
 */
class MagazinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MagazinesTable
     */
    protected $Magazines;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Magazines',
        'app.Pubs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Magazines') ? [] : ['className' => MagazinesTable::class];
        $this->Magazines = $this->getTableLocator()->get('Magazines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Magazines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MagazinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MagazinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
