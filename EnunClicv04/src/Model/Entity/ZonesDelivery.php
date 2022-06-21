<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZonesDelivery Entity
 *
 * @property int|null $zones_id
 * @property int|null $deliverymans_id
 *
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\Delivery $delivery
 */
class ZonesDelivery extends Entity
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
        'zones_id' => true,
        'deliverymans_id' => true,
        'zone' => true,
        'delivery' => true,
    ];
}
