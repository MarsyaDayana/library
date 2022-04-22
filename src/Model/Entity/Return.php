<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Return Entity
 *
 * @property int $id
 * @property int|null $Book_Number
 * @property int|null $Book_Title
 * @property int|null $Issue_Date
 * @property int|null $Due_Date
 * @property \Cake\I18n\FrozenDate|null $Return_Date
 * @property int|null $Member
 * @property int|null $Member_Number
 * @property string|null $Fine
 * @property int|null $Status
 */
class Return extends Entity
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
        'Book_Number' => true,
        'Book_Title' => true,
        'Issue_Date' => true,
        'Due_Date' => true,
        'Return_Date' => true,
        'Member' => true,
        'Member_Number' => true,
        'Fine' => true,
        'Status' => true,
    ];
}
