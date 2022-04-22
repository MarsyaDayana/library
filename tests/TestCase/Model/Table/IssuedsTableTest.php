<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IssuedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IssuedsTable Test Case
 */
class IssuedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IssuedsTable
     */
    protected $Issueds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Issueds',
        'app.Borrows',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Issueds') ? [] : ['className' => IssuedsTable::class];
        $this->Issueds = $this->getTableLocator()->get('Issueds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Issueds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IssuedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\IssuedsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
