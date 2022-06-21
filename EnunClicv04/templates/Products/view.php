<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->order_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->supplier_id, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->supplier_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $product->has('order') ? $this->Html->link($product->order->orders_id, ['controller' => 'Orders', 'action' => 'view', $product->order->orders_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($product->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Quantities') ?></th>
                    <td><?= $product->order_quantities === null ? '' : $this->Number->format($product->order_quantities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Prices') ?></th>
                    <td><?= $product->order_prices === null ? '' : $this->Number->format($product->order_prices) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Order Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->order_descriptions)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Offers') ?></h4>
                <?php if (!empty($product->offers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Offers Id') ?></th>
                            <th><?= __('Offer Names') ?></th>
                            <th><?= __('Offer Descriptions') ?></th>
                            <th><?= __('Offer Start Dates') ?></th>
                            <th><?= __('Offer Final Dates') ?></th>
                            <th><?= __('Offer Prices') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->offers as $offers) : ?>
                        <tr>
                            <td><?= h($offers->offers_id) ?></td>
                            <td><?= h($offers->offer_names) ?></td>
                            <td><?= h($offers->offer_descriptions) ?></td>
                            <td><?= h($offers->offer_start_dates) ?></td>
                            <td><?= h($offers->offer_final_dates) ?></td>
                            <td><?= h($offers->offer_prices) ?></td>
                            <td><?= h($offers->product_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Offers', 'action' => 'view', $offers->offers_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Offers', 'action' => 'edit', $offers->offers_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offers', 'action' => 'delete', $offers->offers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $offers->offers_id)]) ?>
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
