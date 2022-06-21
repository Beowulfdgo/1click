<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Preference Entity
 *
 * @property int $preferents_id
 * @property string|null $preferent_descriptions
 * @property int|null $preferent_fees
 * @property int|null $costumers_id
 *
 * @property \App\Model\Entity\Costumer $costumer
 */
class Preference extends Entity
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
        'preferent_descriptions' => true,
        'preferent_fees' => true,
        'costumers_id' => true,
        'costumer' => true,
    ];
}
