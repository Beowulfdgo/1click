<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregister $dailyregister
 * @var \Cake\Collection\CollectionInterface|string[] $deliveries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dailyregisters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisters form content">
            <?= $this->Form->create($dailyregister) ?>
            <fieldset>
                <legend><?= __('Add Dailyregister') ?></legend>
                <?php
                    echo $this->Form->control('register_status');
                    echo $this->Form->control('daily_initial_cashes');
                    echo $this->Form->control('daily_final_cashes');
                    echo $this->Form->control('register_dates', ['empty' => true]);
                    echo $this->Form->control('deliverymans_id', ['options' => $deliveries, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
