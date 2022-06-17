<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderstable[]|\Cake\Collection\CollectionInterface $orderstable
 */
?>
<div class="orderstable index content">
    <?= $this->Html->link(__('New Orderstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orderstable') ?></h3>
    <div class="table-responsive">
    <h3>
        <a href="http://localhost:8765/users/home" tarjet="_blank">Regresar</a>
    </h3>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('orders_id') ?></th>
                    <th><?= $this->Paginator->sort('order_addresses') ?></th>
                    <th><?= $this->Paginator->sort('referencess') ?></th>
                    <th><?= $this->Paginator->sort('dates') ?></th>
                    <th><?= $this->Paginator->sort('times') ?></th>
                    <th><?= $this->Paginator->sort('fees') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderstable as $orderstable): ?>
                <tr>
                    <td><?= $this->Number->format($orderstable->orders_id) ?></td>
                    <td><?= h($orderstable->order_addresses) ?></td>
                    <td><?= h($orderstable->referencess) ?></td>
                    <td><?= h($orderstable->dates) ?></td>
                    <td><?= h($orderstable->times) ?></td>
                    <td><?= $orderstable->fees === null ? '' : $this->Number->format($orderstable->fees) ?></td>
                    <td><?= h($orderstable->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderstable->orders_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderstable->orders_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderstable->orders_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderstable->orders_id)]) ?>
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
