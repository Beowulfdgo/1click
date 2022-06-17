<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderstable $orderstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orderstable'), ['action' => 'edit', $orderstable->orders_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orderstable'), ['action' => 'delete', $orderstable->orders_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderstable->orders_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orderstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orderstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderstable view content">
            <h3><?= h($orderstable->orders_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order Addresses') ?></th>
                    <td><?= h($orderstable->order_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencess') ?></th>
                    <td><?= h($orderstable->referencess) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($orderstable->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Orders Id') ?></th>
                    <td><?= $this->Number->format($orderstable->orders_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fees') ?></th>
                    <td><?= $orderstable->fees === null ? '' : $this->Number->format($orderstable->fees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dates') ?></th>
                    <td><?= h($orderstable->dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Times') ?></th>
                    <td><?= h($orderstable->times) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Orders Gps') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orderstable->orders_gps)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
