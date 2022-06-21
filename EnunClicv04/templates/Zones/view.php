<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Zone'), ['action' => 'edit', $zone->zones_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Zone'), ['action' => 'delete', $zone->zones_id], ['confirm' => __('Are you sure you want to delete # {0}?', $zone->zones_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Zones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Zone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zones view content">
            <h3><?= h($zone->zones_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $zone->has('order') ? $this->Html->link($zone->order->orders_id, ['controller' => 'Orders', 'action' => 'view', $zone->order->orders_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $zone->has('delivery') ? $this->Html->link($zone->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $zone->delivery->delivery_man_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Zones Id') ?></th>
                    <td><?= $this->Number->format($zone->zones_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Initial Zones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zone->initial_zones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Final Zones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zone->final_zones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zone->descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
