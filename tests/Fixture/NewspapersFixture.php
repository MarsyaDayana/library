<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NewspapersFixture
 */
class NewspapersFixture extends TestFixture
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
                'Language' => 'Lorem ipsum dolor sit amet',
                'Name' => 'Lorem ipsum dolor sit amet',
                'Date_Of_Receipt' => '2022-04-05',
                'Date_Published' => '2022-04-05',
                'Pages' => 1,
                'Price' => 1.5,
                'Type' => 'Lorem ipsum dolor sit amet',
                'pub_id' => 1,
            ],
        ];
        parent::init();
    }
}
