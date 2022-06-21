<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ad Entity
 *
 * @property int $ads_id
 * @property string|null $ads_names
 * @property string|null $ads_descriptions
 * @property \Cake\I18n\FrozenDate|null $ads_start_dates
 * @property \Cake\I18n\FrozenDate|null $ads_end_dates
 * @property int|null $costumers_id
 *
 * @property \App\Model\Entity\Costumer $costumer
 */
class Ad extends Entity
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
        'ads_names' => true,
        'ads_descriptions' => true,
        'ads_start_dates' => true,
        'ads_end_dates' => true,
        'costumers_id' => true,
        'costumer' => true,
    ];
}
