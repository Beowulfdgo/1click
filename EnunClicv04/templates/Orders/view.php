<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->orders_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->orders_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orders_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->orders_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order Addresses') ?></th>
                    <td><?= h($order->order_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencees') ?></th>
                    <td><?= h($order->referencees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($order->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $order->has('delivery') ? $this->Html->link($order->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $order->delivery->delivery_man_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer') ?></th>
                    <td><?= $order->has('costumer') ? $this->Html->link($order->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $order->costumer->costumer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Zone') ?></th>
                    <td><?= $order->has('zone') ? $this->Html->link($order->zone->zones_id, ['controller' => 'Zones', 'action' => 'view', $order->zone->zones_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Orders Id') ?></th>
                    <td><?= $this->Number->format($order->orders_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fees') ?></th>
                    <td><?= $order->fees === null ? '' : $this->Number->format($order->fees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dates') ?></th>
                    <td><?= h($order->dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Times') ?></th>
                    <td><?= h($order->times) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Orders Gps') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($order->orders_gps)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($order->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Order Quantities') ?></th>
                            <th><?= __('Order Descriptions') ?></th>
                            <th><?= __('Order Prices') ?></th>
                            <th><?= __('Suppliers Id') ?></th>
                            <th><?= __('Orders Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->products as $products) : ?>
                        <tr>
                            <td><?= h($products->order_id) ?></td>
                            <td><?= h($products->order_quantities) ?></td>
                            <td><?= h($products->order_descriptions) ?></td>
                            <td><?= h($products->order_prices) ?></td>
                            <td><?= h($products->suppliers_id) ?></td>
                            <td><?= h($products->orders_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->order_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->order_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->order_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
