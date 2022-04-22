<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReturnsFixture
 */
class ReturnsFixture extends TestFixture
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
                'Book_Number' => 1,
                'Book_Title' => 1,
                'Issue_Date' => 1,
                'Due_Date' => 1,
                'Return_Date' => '2022-04-05',
                'Member' => 1,
                'Member_Number' => 1,
                'Fine' => 1.5,
                'Status' => 1,
            ],
        ];
        parent::init();
    }
}
