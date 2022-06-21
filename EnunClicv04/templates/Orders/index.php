<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('orders_id') ?></th>
                    <th><?= $this->Paginator->sort('order_addresses') ?></th>
                    <th><?= $this->Paginator->sort('referencees') ?></th>
                    <th><?= $this->Paginator->sort('dates') ?></th>
                    <th><?= $this->Paginator->sort('times') ?></th>
                    <th><?= $this->Paginator->sort('fees') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('deliverymans_id') ?></th>
                    <th><?= $this->Paginator->sort('costumers_id') ?></th>
                    <th><?= $this->Paginator->sort('zones_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->orders_id) ?></td>
                    <td><?= h($order->order_addresses) ?></td>
                    <td><?= h($order->referencees) ?></td>
                    <td><?= h($order->dates) ?></td>
                    <td><?= h($order->times) ?></td>
                    <td><?= $order->fees === null ? '' : $this->Number->format($order->fees) ?></td>
                    <td><?= h($order->status) ?></td>
                    <td><?= $order->has('delivery') ? $this->Html->link($order->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $order->delivery->delivery_man_id]) : '' ?></td>
                    <td><?= $order->has('costumer') ? $this->Html->link($order->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $order->costumer->costumer_id]) : '' ?></td>
                    <td><?= $order->has('zone') ? $this->Html->link($order->zone->zones_id, ['controller' => 'Zones', 'action' => 'view', $order->zone->zones_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->orders_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->orders_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->orders_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orders_id)]) ?>
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
