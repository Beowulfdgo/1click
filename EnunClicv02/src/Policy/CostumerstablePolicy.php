<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Costumerstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Costumerstable policy
 */
class CostumerstablePolicy
{
    /**
     * Check if $user can add Costumerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Costumerstable $costumerstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Costumerstable $costumerstable)
    {
        return $this->isAuthorized($user, $costumerstable);
    }

    /**
     * Check if $user can edit Costumerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Costumerstable $costumerstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Costumerstable $costumerstable)
    {
        return $this->isAuthorized($user, $costumerstable);
    }

    /**
     * Check if $user can delete Costumerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Costumerstable $costumerstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Costumerstable $costumerstable)
    {
        return $this->isAuthorized($user, $costumerstable);
    }

    /**
     * Check if $user can view Costumerstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Costumerstable $costumerstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Costumerstable $costumerstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Costumerstable $costumerstable)
    {
        return $costumerstable->user_id === $user->getIdentifier();
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
