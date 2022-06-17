<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productstable Entity
 *
 * @property int $order_id
 * @property int|null $order_quantities
 * @property string|null $order_descriptions
 * @property int|null $order_prices
 */
class Productstable extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'order_quantities' => true,
        'order_descriptions' => true,
        'order_prices' => true,
    ];
}
