<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumerstable[]|\Cake\Collection\CollectionInterface $costumerstable
 */
?>
<div class="costumerstable index content">
    <?= $this->Html->link(__('New Costumerstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Costumerstable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('costumer_id') ?></th>
                    <th><?= $this->Paginator->sort('costumer_names') ?></th>
                    <th><?= $this->Paginator->sort('costumer_addresses') ?></th>
                    <th><?= $this->Paginator->sort('costumer_phones') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($costumerstable as $costumerstable): ?>
                <tr>
                    <td><?= $this->Number->format($costumerstable->costumer_id) ?></td>
                    <td><?= h($costumerstable->costumer_names) ?></td>
                    <td><?= h($costumerstable->costumer_addresses) ?></td>
                    <td><?= $this->Number->format($costumerstable->costumer_phones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $costumerstable->costumer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $costumerstable->costumer_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $costumerstable->costumer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $costumerstable->costumer_id)]) ?>
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
