<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Paymentstable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Paymentstable policy
 */
class PaymentstablePolicy
{
    /**
     * Check if $user can add Paymentstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Paymentstable $paymentstable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Paymentstable $paymentstable)
    {
        return $this->isAuthorized($user, $paymentstable);
    }

    /**
     * Check if $user can edit Paymentstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Paymentstable $paymentstable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Paymentstable $paymentstable)
    {
        return $this->isAuthorized($user, $paymentstable);
    }

    /**
     * Check if $user can delete Paymentstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Paymentstable $paymentstable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Paymentstable $paymentstable)
    {
        return $this->isAuthorized($user, $paymentstable);
    }

    /**
     * Check if $user can view Paymentstable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Paymentstable $paymentstable
     * @return bool
     */
    public function canView(IdentityInterface $user, Paymentstable $paymentstable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Paymentstable $paymentstable)
    {
        return $paymentstable->user_id === $user->getIdentifier();
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
