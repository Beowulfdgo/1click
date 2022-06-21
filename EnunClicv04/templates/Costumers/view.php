<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumer $costumer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Costumer'), ['action' => 'edit', $costumer->costumer_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Costumer'), ['action' => 'delete', $costumer->costumer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $costumer->costumer_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Costumers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Costumer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumers view content">
            <h3><?= h($costumer->costumer_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Costumer Names') ?></th>
                    <td><?= h($costumer->costumer_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Addresses') ?></th>
                    <td><?= h($costumer->costumer_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $costumer->has('payment') ? $this->Html->link($costumer->payment->payment_id, ['controller' => 'Payments', 'action' => 'view', $costumer->payment->payment_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Id') ?></th>
                    <td><?= $this->Number->format($costumer->costumer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Phones') ?></th>
                    <td><?= $this->Number->format($costumer->costumer_phones) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Costumer Gps') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($costumer->costumer_gps)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
