<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumer[]|\Cake\Collection\CollectionInterface $costumers
 */
?>
<div class="costumers index content">
    <?= $this->Html->link(__('New Costumer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Costumers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('costumer_id') ?></th>
                    <th><?= $this->Paginator->sort('costumer_names') ?></th>
                    <th><?= $this->Paginator->sort('costumer_addresses') ?></th>
                    <th><?= $this->Paginator->sort('costumer_phones') ?></th>
                    <th><?= $this->Paginator->sort('payments_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($costumers as $costumer): ?>
                <tr>
                    <td><?= $this->Number->format($costumer->costumer_id) ?></td>
                    <td><?= h($costumer->costumer_names) ?></td>
                    <td><?= h($costumer->costumer_addresses) ?></td>
                    <td><?= $this->Number->format($costumer->costumer_phones) ?></td>
                    <td><?= $costumer->has('payment') ? $this->Html->link($costumer->payment->payment_id, ['controller' => 'Payments', 'action' => 'view', $costumer->payment->payment_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $costumer->costumer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $costumer->costumer_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $costumer->costumer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $costumer->costumer_id)]) ?>
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
