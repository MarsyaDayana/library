<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PublishersFixture
 */
class PublishersFixture extends TestFixture
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
                'pub_id' => 1,
                'pub_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2022-04-05 06:27:28',
                'modified' => '2022-04-05 06:27:28',
            ],
        ];
        parent::init();
    }
}
