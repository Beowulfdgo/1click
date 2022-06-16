<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Adstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Adstable policy
 */
class AdstablePolicy
{
    /**
     * Check if $user can add Adstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Adstable $adstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Adstable $adstable)
    {
        return $this->isAuthorized($user, $adstable);
    }

    /**
     * Check if $user can edit Adstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Adstable $adstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Adstable $adstable)
    {
        return $this->isAuthorized($user, $adstable);
    }

    /**
     * Check if $user can delete Adstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Adstable $adstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Adstable $adstable)
    {
        return $this->isAuthorized($user, $adstable);
    }

    /**
     * Check if $user can view Adstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Adstable $adstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Adstable $adstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Adstable $adstable)
    {
        return $adstable->user_id === $user->getIdentifier();
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
