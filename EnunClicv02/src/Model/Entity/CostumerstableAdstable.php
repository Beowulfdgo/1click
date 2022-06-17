<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CostumerstableAdstable Entity
 *
 * @property int $costumerstable_costumer_id
 * @property int $adstable_ads_id
 *
 * @property \App\Model\Entity\Costumerstable $costumerstable
 * @property \App\Model\Entity\Adstable $adstable
 */
class CostumerstableAdstable extends Entity
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
        'costumerstable_costumer_id' => true,
        'adstable_ads_id' => true,
        'costumerstable' => true,
        'adstable' => true,
    ];
}
