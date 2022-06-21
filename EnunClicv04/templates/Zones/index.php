<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone[]|\Cake\Collection\CollectionInterface $zones
 */
?>
<div class="zones index content">
    <?= $this->Html->link(__('New Zone'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Zones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('zones_id') ?></th>
                    <th><?= $this->Paginator->sort('orders_id') ?></th>
                    <th><?= $this->Paginator->sort('deliverymans_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zones as $zone): ?>
                <tr>
                    <td><?= $this->Number->format($zone->zones_id) ?></td>
                    <td><?= $zone->has('order') ? $this->Html->link($zone->order->orders_id, ['controller' => 'Orders', 'action' => 'view', $zone->order->orders_id]) : '' ?></td>
                    <td><?= $zone->has('delivery') ? $this->Html->link($zone->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $zone->delivery->delivery_man_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $zone->zones_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zone->zones_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zone->zones_id], ['confirm' => __('Are you sure you want to delete # {0}?', $zone->zones_id)]) ?>
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
