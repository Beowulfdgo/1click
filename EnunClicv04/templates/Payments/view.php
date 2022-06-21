<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->payment_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->payment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->payment_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments view content">
            <h3><?= h($payment->payment_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Payment Methods') ?></th>
                    <td><?= h($payment->payment_methods) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Id') ?></th>
                    <td><?= $this->Number->format($payment->payment_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Payment Receipts') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($payment->payment_receipts)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
