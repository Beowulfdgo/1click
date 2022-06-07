<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productstable[]|\Cake\Collection\CollectionInterface $productstable
 */
?>
<div class="productstable index content">
    <?= $this->Html->link(__('New Productstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productstable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('order_quantities') ?></th>
                    <th><?= $this->Paginator->sort('order_prices') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productstable as $productstable): ?>
                <tr>
                    <td><?= $this->Number->format($productstable->order_id) ?></td>
                    <td><?= $productstable->order_quantities === null ? '' : $this->Number->format($productstable->order_quantities) ?></td>
                    <td><?= $productstable->order_prices === null ? '' : $this->Number->format($productstable->order_prices) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productstable->order_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productstable->order_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productstable->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productstable->order_id)]) ?>
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
