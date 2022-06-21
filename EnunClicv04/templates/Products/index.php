<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('order_quantities') ?></th>
                    <th><?= $this->Paginator->sort('order_prices') ?></th>
                    <th><?= $this->Paginator->sort('suppliers_id') ?></th>
                    <th><?= $this->Paginator->sort('orders_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->order_id) ?></td>
                    <td><?= $product->order_quantities === null ? '' : $this->Number->format($product->order_quantities) ?></td>
                    <td><?= $product->order_prices === null ? '' : $this->Number->format($product->order_prices) ?></td>
                    <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->supplier_id, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->supplier_id]) : '' ?></td>
                    <td><?= $product->has('order') ? $this->Html->link($product->order->orders_id, ['controller' => 'Orders', 'action' => 'view', $product->order->orders_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->order_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->order_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->order_id)]) ?>
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
