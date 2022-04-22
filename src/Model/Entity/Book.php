<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string|null $ISBN_NO
 * @property string|null $Book_Title
 * @property int|null $Book_Type
 * @property string|null $Author_Name
 * @property int|null $Quantity
 * @property \Cake\I18n\FrozenDate|null $Purchase_Date
 * @property string|null $Edition
 * @property string|null $Price
 * @property int|null $Pages
 * @property int|null $pub_id
 *
 * @property \App\Model\Entity\Publisher $publisher
 */
class Book extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'ISBN_NO' => true,
        'Book_Title' => true,
        'Book_Type' => true,
        'Author_Name' => true,
        'Quantity' => true,
        'Purchase_Date' => true,
        'Edition' => true,
        'Price' => true,
        'Pages' => true,
        'pub_id' => true,
        'publisher' => true,
    ];
}
