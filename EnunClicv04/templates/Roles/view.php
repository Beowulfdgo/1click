<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->roles_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->roles_id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->roles_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roles view content">
            <h3><?= h($role->roles_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Roles') ?></th>
                    <td><?= h($role->roles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Roles Id') ?></th>
                    <td><?= $this->Number->format($role->roles_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($role->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Users Id') ?></th>
                            <th><?= __('Users') ?></th>
                            <th><?= __('Passwords') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Deliverymans Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->users as $users) : ?>
                        <tr>
                            <td><?= h($users->users_id) ?></td>
                            <td><?= h($users->users) ?></td>
                            <td><?= h($users->passwords) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->deliverymans_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->users_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->users_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->users_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
