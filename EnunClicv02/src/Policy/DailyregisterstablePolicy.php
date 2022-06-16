<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Dailyregisterstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Dailyregisterstable policy
 */
class DailyregisterstablePolicy
{
    /**
     * Check if $user can add Dailyregisterstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dailyregisterstable $dailyregisterstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Dailyregisterstable $dailyregisterstable)
    {
        return $this->isAuthorized($user, $dailyregisterstable);
    }

    /**
     * Check if $user can edit Dailyregisterstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dailyregisterstable $dailyregisterstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Dailyregisterstable $dailyregisterstable)
    {
        return $this->isAuthorized($user, $dailyregisterstable);
    }

    /**
     * Check if $user can delete Dailyregisterstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dailyregisterstable $dailyregisterstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Dailyregisterstable $dailyregisterstable)
    {
        return $this->isAuthorized($user, $dailyregisterstable);
    }

    /**
     * Check if $user can view Dailyregisterstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dailyregisterstable $dailyregisterstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Dailyregisterstable $dailyregisterstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Dailyregisterstable $dailyregisterstable)
    {
        return $dailyregisterstable->user_id === $user->getIdentifier();
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
