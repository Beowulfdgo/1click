<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ad $ad
 * @var \Cake\Collection\CollectionInterface|string[] $costumers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ads form content">
            <?= $this->Form->create($ad) ?>
            <fieldset>
                <legend><?= __('Add Ad') ?></legend>
                <?php
                    echo $this->Form->control('ads_names');
                    echo $this->Form->control('ads_descriptions');
                    echo $this->Form->control('ads_start_dates', ['empty' => true]);
                    echo $this->Form->control('ads_end_dates', ['empty' => true]);
                    echo $this->Form->control('costumers_id', ['options' => $costumers, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
