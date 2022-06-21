<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Costumer Entity
 *
 * @property int $costumer_id
 * @property string|null $costumer_names
 * @property string|null $costumer_addresses
 * @property string|null $costumer_gps
 * @property int $costumer_phones
 * @property int|null $payments_id
 *
 * @property \App\Model\Entity\Payment $payment
 */
class Costumer extends Entity
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
        'costumer_names' => true,
        'costumer_addresses' => true,
        'costumer_gps' => true,
        'costumer_phones' => true,
        'payments_id' => true,
        'payment' => true,
    ];
}
