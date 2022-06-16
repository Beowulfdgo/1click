<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Rolestable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Rolestable policy
 */
class RolestablePolicy
{
    /**
     * Check if $user can add Rolestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rolestable $rolestable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Rolestable $rolestable)
    {
        return $this->isAuthorized($user, $rolestable);
    }

    /**
     * Check if $user can edit Rolestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rolestable $rolestable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Rolestable $rolestable)
    {
        return $this->isAuthorized($user, $rolestable);
    }

    /**
     * Check if $user can delete Rolestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rolestable $rolestable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Rolestable $rolestable)
    {
        return $this->isAuthorized($user, $rolestable);
    }

    /**
     * Check if $user can view Rolestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rolestable $rolestable
     * @return bool
     */
    public function canView(IdentityInterface $user, Rolestable $rolestable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Rolestable $rolestable)
    {
        return $zonestable->user_id === $user->getIdentifier();
    }
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
            
        }
        // Default deny
        return false;
    }
}
