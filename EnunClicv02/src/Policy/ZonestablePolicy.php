<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Zonestable;
use Authorization\IdentityInterface;
use App\Policy\Exception;
use Cake\Network\Exception\NotFoundException;
use Cake\Error\ExceptionRenderer;
/**
 * Zonestable policy
 */
class ZonestablePolicy
{
    /**
     * Check if $user can add Zonestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Zonestable $zonestable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Zonestable $zonestable)
    {
        return $this->isAuthorized($user, $zonestable);
    }

    /**
     * Check if $user can edit Zonestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Zonestable $zonestable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Zonestable $zonestable)
    {
        return $this->isAuthorized($user, $zonestable);
    }

    /**
     * Check if $user can delete Zonestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Zonestable $zonestable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Zonestable $zonestable)
    {
        return $this->isAuthorized($user, $zonestable);
    }

    /**
     * Check if $user can view Zonestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Zonestable $zonestable
     * @return bool
     */
    public function canView(IdentityInterface $user, Zonestable $zonestable)
    {
    }
    protected function isAuthor(IdentityInterface $user, Zonestable $zonestable)
    {
        return $zonestable->user_id === $user->getIdentifier();
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
