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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentstable->payment_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentstable->payment_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Paymentstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentstable form content">
            <?= $this->Form->create($paymentstable) ?>
            <fieldset>
                <legend><?= __('Edit Paymentstable') ?></legend>
                <?php
                    echo $this->Form->control('payment_methods');
                    echo $this->Form->control('payment_receipts');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
