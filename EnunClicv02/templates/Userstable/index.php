<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userstable[]|\Cake\Collection\CollectionInterface $userstable
 */
?>
<div class="userstable index content">
    <?= $this->Html->link(__('New Userstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Userstable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('users') ?></th>
                    <th><?= $this->Paginator->sort('passwords') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userstable as $userstable): ?>
                <tr>
                    <td><?= $this->Number->format($userstable->users_id) ?></td>
                    <td><?= h($userstable->users) ?></td>
                    <td><?= h($userstable->passwords) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userstable->users_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userstable->users_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userstable->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userstable->users_id)]) ?>
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
