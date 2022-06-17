<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable[]|\Cake\Collection\CollectionInterface $supplierstable
 */
?>
<div class="supplierstable index content">
    <?= $this->Html->link(__('New Supplierstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Supplierstable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('supplier_id') ?></th>
                    <th><?= $this->Paginator->sort('supplier_names') ?></th>
                    <th><?= $this->Paginator->sort('supplier_addresses') ?></th>
                    <th><?= $this->Paginator->sort('supplier_phones') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplierstable as $supplierstable): ?>
                <tr>
                    <td><?= $this->Number->format($supplierstable->supplier_id) ?></td>
                    <td><?= h($supplierstable->supplier_names) ?></td>
                    <td><?= h($supplierstable->supplier_addresses) ?></td>
                    <td><?= $this->Number->format($supplierstable->supplier_phones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplierstable->supplier_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplierstable->supplier_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplierstable->supplier_id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierstable->supplier_id)]) ?>
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
