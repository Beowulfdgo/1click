<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentstable $paymentstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Paymentstable'), ['action' => 'edit', $paymentstable->payment_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Paymentstable'), ['action' => 'delete', $paymentstable->payment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentstable->payment_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Paymentstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Paymentstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentstable view content">
            <h3><?= h($paymentstable->payment_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Payment Methods') ?></th>
                    <td><?= h($paymentstable->payment_methods) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Id') ?></th>
                    <td><?= $this->Number->format($paymentstable->payment_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Payment Receipts') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($paymentstable->payment_receipts)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
