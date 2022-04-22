<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BorrowsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BorrowsTable Test Case
 */
class BorrowsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BorrowsTable
     */
    protected $Borrows;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Borrows',
        'app.Books',
        'app.Magazines',
        'app.Newspapers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Borrows') ? [] : ['className' => BorrowsTable::class];
        $this->Borrows = $this->getTableLocator()->get('Borrows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Borrows);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BorrowsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BorrowsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
