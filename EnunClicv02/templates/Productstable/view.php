<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productstable $productstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Productstable'), ['action' => 'edit', $productstable->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Productstable'), ['action' => 'delete', $productstable->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productstable->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Productstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productstable view content">
            <h3><?= h($productstable->order_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($productstable->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Quantities') ?></th>
                    <td><?= $productstable->order_quantities === null ? '' : $this->Number->format($productstable->order_quantities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Prices') ?></th>
                    <td><?= $productstable->order_prices === null ? '' : $this->Number->format($productstable->order_prices) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Order Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($productstable->order_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
