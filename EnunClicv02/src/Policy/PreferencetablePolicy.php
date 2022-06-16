<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Preferencetable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Preferencetable policy
 */
class PreferencetablePolicy
{
    /**
     * Check if $user can add Preferencetable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Preferencetable $preferencetable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Preferencetable $preferencetable)
    {
        return $this->isAuthorized($user, $preferencetable);
    }

    /**
     * Check if $user can edit Preferencetable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Preferencetable $preferencetable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Preferencetable $preferencetable)
    {
        return $this->isAuthorized($user, $preferencetable);
    }

    /**
     * Check if $user can delete Preferencetable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Preferencetable $preferencetable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Preferencetable $preferencetable)
    {
        return $this->isAuthorized($user, $preferencetable);
    }

    /**
     * Check if $user can view Preferencetable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Preferencetable $preferencetable
     * @return bool
     */
    public function canView(IdentityInterface $user, Preferencetable $preferencetable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Preferencetable $preferencetable)
    {
        return $preferencetable->user_id === $user->getIdentifier();
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
