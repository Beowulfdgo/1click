<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Delivery'), ['action' => 'edit', $delivery->delivery_man_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Delivery'), ['action' => 'delete', $delivery->delivery_man_id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->delivery_man_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Deliveries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveries view content">
            <h3><?= h($delivery->delivery_man_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Delivery Man Names') ?></th>
                    <td><?= h($delivery->delivery_man_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zone') ?></th>
                    <td><?= $delivery->has('zone') ? $this->Html->link($delivery->zone->zones_id, ['controller' => 'Zones', 'action' => 'view', $delivery->zone->zones_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Man Id') ?></th>
                    <td><?= $this->Number->format($delivery->delivery_man_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Delivery Man Schedules') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($delivery->delivery_man_schedules)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Delivery Man Days') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($delivery->delivery_man_days)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
