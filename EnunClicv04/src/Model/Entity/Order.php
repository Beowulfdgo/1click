<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $orders_id
 * @property string|null $order_addresses
 * @property string|null $referencees
 * @property \Cake\I18n\FrozenDate|null $dates
 * @property \Cake\I18n\Time|null $times
 * @property int|null $fees
 * @property string|null $status
 * @property string|null $orders_gps
 * @property int|null $deliverymans_id
 * @property int|null $costumers_id
 * @property int|null $zones_id
 *
 * @property \App\Model\Entity\Delivery $delivery
 * @property \App\Model\Entity\Costumer $costumer
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
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
        'referencees' => true,
        'dates' => true,
        'times' => true,
        'fees' => true,
        'status' => true,
        'orders_gps' => true,
        'deliverymans_id' => true,
        'costumers_id' => true,
        'zones_id' => true,
        'delivery' => true,
        'costumer' => true,
        'zone' => true,
        'products' => true,
    ];
}
