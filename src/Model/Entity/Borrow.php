<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Borrow Entity
 *
 * @property int $borrow_id
 * @property \Cake\I18n\FrozenTime $borrow_date
 * @property \Cake\I18n\FrozenTime $return_date
 * @property int $status
 * @property int $book_id
 * @property int $magazine_id
 * @property int $newspaper_id
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Magazine $magazine
 * @property \App\Model\Entity\Newspaper $newspaper
 */
class Borrow extends Entity
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
        'borrow_date' => true,
        'return_date' => true,
        'status' => true,
        'book_id' => true,
        'magazine_id' => true,
        'newspaper_id' => true,
        'book' => true,
        'magazine' => true,
        'newspaper' => true,
        'member' => true,
    ];
}
