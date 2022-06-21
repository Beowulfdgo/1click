<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery[]|\Cake\Collection\CollectionInterface $deliveries
 */
?>
<div class="deliveries index content">
    <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Deliveries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('delivery_man_id') ?></th>
                    <th><?= $this->Paginator->sort('delivery_man_names') ?></th>
                    <th><?= $this->Paginator->sort('zones_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deliveries as $delivery): ?>
                <tr>
                    <td><?= $this->Number->format($delivery->delivery_man_id) ?></td>
                    <td><?= h($delivery->delivery_man_names) ?></td>
                    <td><?= $delivery->has('zone') ? $this->Html->link($delivery->zone->zones_id, ['controller' => 'Zones', 'action' => 'view', $delivery->zone->zones_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $delivery->delivery_man_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $delivery->delivery_man_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $delivery->delivery_man_id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->delivery_man_id)]) ?>
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
