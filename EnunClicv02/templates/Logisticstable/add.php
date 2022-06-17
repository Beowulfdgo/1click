<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logisticstable $logisticstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Logisticstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="logisticstable form content">
            <?= $this->Form->create($logisticstable) ?>
            <fieldset>
                <legend><?= __('Add Logisticstable') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
