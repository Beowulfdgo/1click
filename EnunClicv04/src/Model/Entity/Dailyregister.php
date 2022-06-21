<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dailyregister Entity
 *
 * @property int $register_id
 * @property string $register_status
 * @property int|null $daily_initial_cashes
 * @property int|null $daily_final_cashes
 * @property \Cake\I18n\FrozenDate|null $register_dates
 * @property int|null $deliverymans_id
 *
 * @property \App\Model\Entity\Delivery $delivery
 */
class Dailyregister extends Entity
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
        'register_status' => true,
        'daily_initial_cashes' => true,
        'daily_final_cashes' => true,
        'register_dates' => true,
        'deliverymans_id' => true,
        'delivery' => true,
    ];
}
