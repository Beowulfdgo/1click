<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orderstable Entity
 *
 * @property int $orders_id
 * @property string|null $order_addresses
 * @property string|null $referencess
 * @property \Cake\I18n\FrozenDate|null $dates
 * @property \Cake\I18n\Time|null $times
 * @property int|null $fees
 * @property string|null $status
 * @property string|null $orders_gps
 */
class Orderstable extends Entity
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
        'order_addresses' => true,
        'referencess' => true,
        'dates' => true,
        'times' => true,
        'fees' => true,
        'status' => true,
        'orders_gps' => true,
    ];
}
