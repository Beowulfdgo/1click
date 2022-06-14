<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;

/**
 * UserstableRolestable Entity
 *
 * @property int $userstable_users_id
 * @property int $rolestable_roles_id
 *
 * @property \App\Model\Entity\Userstable $userstable
 * @property \App\Model\Entity\Rolestable $rolestable
 */
class UserstableRolestable extends Entity
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
        'userstable_users_id' => true,
        'rolestable_roles_id' => true,
        'userstable' => true,
        'rolestable' => true,
    ];
}
