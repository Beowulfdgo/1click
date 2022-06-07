<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paymentstable Entity
 *
 * @property int $payment_id
 * @property string $payment_methods
 * @property string|null $payment_receipts
 */
class Paymentstable extends Entity
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
        'payment_methods' => true,
        'payment_receipts' => true,
    ];
}
