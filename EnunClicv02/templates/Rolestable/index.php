<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolestable[]|\Cake\Collection\CollectionInterface $rolestable
 */
?>
<div class="rolestable index content">
    <?= $this->Html->link(__('New Rolestable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rolestable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('roles_id') ?></th>
                    <th><?= $this->Paginator->sort('roles') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rolestable as $rolestable): ?>
                <tr>
                    <td><?= $this->Number->format($rolestable->roles_id) ?></td>
                    <td><?= h($rolestable->roles) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rolestable->roles_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolestable->roles_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolestable->roles_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolestable->roles_id)]) ?>
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
