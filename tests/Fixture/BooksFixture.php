<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksFixture
 */
class BooksFixture extends TestFixture
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
                'ISBN_NO' => 'Lorem ipsum dolor sit amet',
                'Book_Title' => 'Lorem ipsum dolor sit amet',
                'Book_Type' => 1,
                'Author_Name' => 'Lorem ipsum dolor sit amet',
                'Quantity' => 1,
                'Purchase_Date' => '2022-04-05',
                'Edition' => 'Lorem ipsum dolor sit amet',
                'Price' => 1.5,
                'Pages' => 1,
                'pub_id' => 1,
            ],
        ];
        parent::init();
    }
}
