<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Productstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Productstable policy
 */
class ProductstablePolicy
{
    /**
     * Check if $user can add Productstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Productstable $productstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Productstable $productstable)
    {
        return $this->isAuthorized($user, $productstable);
    }

    /**
     * Check if $user can edit Productstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Productstable $productstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Productstable $productstable)
    {
        return $this->isAuthorized($user, $productstable);
    }

    /**
     * Check if $user can delete Productstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Productstable $productstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Productstable $productstable)
    {
        return $this->isAuthorized($user, $productstable);
    }

    /**
     * Check if $user can view Productstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Productstable $productstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Productstable $productstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Productstable $productstable)
    {
        return $productstable->user_id === $user->getIdentifier();
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
