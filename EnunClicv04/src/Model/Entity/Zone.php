<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Zone Entity
 *
 * @property int $zones_id
 * @property string|null $initial_zones
 * @property string|null $final_zones
 * @property string|null $descriptions
 * @property int|null $orders_id
 * @property int|null $deliverymans_id
 *
 * @property \App\Model\Entity\Order $order
 */
class Zone extends Entity
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
        'initial_zones' => true,
        'final_zones' => true,
        'descriptions' => true,
        'orders_id' => true,
        'deliverymans_id' => true,
        'order' => true,
    ];
}
