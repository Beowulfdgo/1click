<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Deliveriestable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;

/**
 * Deliveriestable policy
 */
class DeliveriestablePolicy
{
    /**
     * Check if $user can add Deliveriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Deliveriestable $deliveriestable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Deliveriestable $deliveriestable)
    {
        return $this->isAuthorized($user, $deliveriestable);
    }

    /**
     * Check if $user can edit Deliveriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Deliveriestable $deliveriestable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Deliveriestable $deliveriestable)
    {
        return $this->isAuthorized($user, $deliveriestable);
    }

    /**
     * Check if $user can delete Deliveriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Deliveriestable $deliveriestable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Deliveriestable $deliveriestable)
    {
        return $this->isAuthorized($user, $deliveriestable);
    }

    /**
     * Check if $user can view Deliveriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Deliveriestable $deliveriestable
     * @return bool
     */
    public function canView(IdentityInterface $user, Deliveriestable $deliveriestable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Deliveriestable $deliveriestable)
    {
        return $deliveriestable->user_id === $user->getIdentifier();
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
