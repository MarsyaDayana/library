<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BorrowsFixture
 */
class BorrowsFixture extends TestFixture
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
                'borrow_id' => 1,
                'borrow_date' => '2022-04-08 01:27:33',
                'return_date' => '2022-04-08 01:27:33',
                'status' => 1,
                'book_id' => 1,
                'magazine_id' => 1,
                'newspaper_id' => 1,
            ],
        ];
        parent::init();
    }
}
