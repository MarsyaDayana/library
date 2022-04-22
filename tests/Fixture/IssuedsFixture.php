<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IssuedsFixture
 */
class IssuedsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'fine' => 1.5,
                'status' => 'Lorem ipsum dolor sit amet',
                'borrow_id' => 1,
            ],
        ];
        parent::init();
    }
}
