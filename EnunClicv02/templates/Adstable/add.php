<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adstable $adstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Adstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adstable form content">
            <?= $this->Form->create($adstable) ?>
            <fieldset>
                <legend><?= __('Add Adstable') ?></legend>
                <?php
                    echo $this->Form->control('ads_names');
                    echo $this->Form->control('ads_descriptions');
                    echo $this->Form->control('ads_start_dates', ['empty' => true]);
                    echo $this->Form->control('ads_end_dates', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
