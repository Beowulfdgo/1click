<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->users_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->users_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->users_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Users') ?></th>
                    <td><?= h($user->users) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passwords') ?></th>
                    <td><?= h($user->passwords) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->roles_id, ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $user->has('delivery') ? $this->Html->link($user->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $user->delivery->delivery_man_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Id') ?></th>
                    <td><?= $this->Number->format($user->users_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
