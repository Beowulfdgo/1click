<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Supplierstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Supplierstable policy
 */
class SupplierstablePolicy
{
    /**
     * Check if $user can add Supplierstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Supplierstable $supplierstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Supplierstable $supplierstable)
    {
        return $this->isAuthorized($user, $supplierstable);
    }

    /**
     * Check if $user can edit Supplierstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Supplierstable $supplierstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Supplierstable $supplierstable)
    {
        return $this->isAuthorized($user, $supplierstable);
    }

    /**
     * Check if $user can delete Supplierstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Supplierstable $supplierstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Supplierstable $supplierstable)
    {
        return $this->isAuthorized($user, $supplierstable);
    }

    /**s
     * Check if $user can view Supplierstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Supplierstable $supplierstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Supplierstable $supplierstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Supplierstable $supplierstable)
    {
        return $supplierstable->user_id === $user->getIdentifier();
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
