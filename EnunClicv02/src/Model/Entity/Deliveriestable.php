<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Deliveriestable Entity
 *
 * @property int $delivery_man_id
 * @property string|null $delivery_man_names
 * @property string|null $delivery_man_schedules
 * @property string|null $delivery_man_days
 */
class Deliveriestable extends Entity
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
        'delivery_man_names' => true,
        'delivery_man_schedules' => true,
        'delivery_man_days' => true,
    ];
}
