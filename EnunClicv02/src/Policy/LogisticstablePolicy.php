<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Logisticstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Logisticstable policy
 */
class LogisticstablePolicy
{
    /**
     * Check if $user can add Logisticstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Logisticstable $logisticstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Logisticstable $logisticstable)
    {
        return $this->isAuthorized($user, $logisticstable);
    }

    /**
     * Check if $user can edit Logisticstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Logisticstable $logisticstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Logisticstable $logisticstable)
    {
        return $this->isAuthorized($user, $logisticstable);
    }

    /**
     * Check if $user can delete Logisticstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Logisticstable $logisticstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Logisticstable $logisticstable)
    {
        return $this->isAuthorized($user, $logisticstable);
    }

    /**
     * Check if $user can view Logisticstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Logisticstable $logisticstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Logisticstable $logisticstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Logisticstable $logisticstable)
    {
        return $logisticstable->user_id === $user->getIdentifier();
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
