<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Offerstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;

/**
 * Offerstable policy
 */
class OfferstablePolicy
{
    /**
     * Check if $user can add Offerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Offerstable $offerstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Offerstable $offerstable)
    {
        return $this->isAuthorized($user, $offerstable);
    }

    /**
     * Check if $user can edit Offerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Offerstable $offerstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Offerstable $offerstable)
    {
        return $this->isAuthorized($user, $offerstable);
    }

    /**
     * Check if $user can delete Offerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Offerstable $offerstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Offerstable $offerstable)
    {
        return $this->isAuthorized($user, $offerstable);
    }

    /**
     * Check if $user can view Offerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Offerstable $offerstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Offerstable $offerstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Offerstable $offerstable)
    {
        return $offerstable->user_id === $user->getIdentifier();
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
