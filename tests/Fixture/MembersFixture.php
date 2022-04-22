<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersFixture
 */
class MembersFixture extends TestFixture
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
                'Membership_Number' => 'Lorem ipsum dolor sit amet',
                'Name' => 'Lorem ipsum dolor sit amet',
                'Contact' => 'Lorem ipsum dolor sit amet',
                'ID_Number' => 1,
            ],
        ];
        parent::init();
    }
}
