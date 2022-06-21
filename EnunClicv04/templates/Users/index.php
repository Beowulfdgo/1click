<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('users') ?></th>
                    <th><?= $this->Paginator->sort('passwords') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('deliverymans_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->users_id) ?></td>
                    <td><?= h($user->users) ?></td>
                    <td><?= h($user->passwords) ?></td>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->roles_id, ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?></td>
                    <td><?= $user->has('delivery') ? $this->Html->link($user->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $user->delivery->delivery_man_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->users_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->users_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->users_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
