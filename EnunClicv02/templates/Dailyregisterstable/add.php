<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable $dailyregisterstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dailyregisterstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisterstable form content">
            <?= $this->Form->create($dailyregisterstable) ?>
            <fieldset>
                <legend><?= __('Add Dailyregisterstable') ?></legend>
                <?php
                    echo $this->Form->control('register_status');
                    echo $this->Form->control('daily_initial_cashes');
                    echo $this->Form->control('daily_final_cashes');
                    echo $this->Form->control('register_dates', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
