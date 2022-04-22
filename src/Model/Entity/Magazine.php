<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Magazine Entity
 *
 * @property int $id
 * @property string|null $Type
 * @property string|null $Name
 * @property \Cake\I18n\FrozenDate|null $Date_Of_Receipt
 * @property \Cake\I18n\FrozenDate|null $Date_Published
 * @property int|null $Pages
 * @property string|null $Price
 * @property int|null $pub_id
 *
 * @property \App\Model\Entity\Pub $pub
 */
class Magazine extends Entity
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
        'Type' => true,
        'Name' => true,
        'Date_Of_Receipt' => true,
        'Date_Published' => true,
        'Pages' => true,
        'Price' => true,
        'pub_id' => true,
        'pub' => true,
    ];
}
