<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Orderstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Orderstable policy
 */
class OrderstablePolicy
{
    /**
     * Check if $user can add Orderstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Orderstable $orderstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Orderstable $orderstable)
    {
        return $this->isAuthorized($user, $orderstable);
    }

    /**
     * Check if $user can edit Orderstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Orderstable $orderstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Orderstable $orderstable)
    {
        return $this->isAuthorized($user, $orderstable);
    }

    /**
     * Check if $user can delete Orderstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Orderstable $orderstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Orderstable $orderstable)
    {
        return $this->isAuthorized($user, $orderstables);
    }

    /**
     * Check if $user can view Orderstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Orderstable $orderstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Orderstable $orderstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Orderstable $orderstable)
    {
        return $orderstable->user_id === $user->getIdentifier();
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
