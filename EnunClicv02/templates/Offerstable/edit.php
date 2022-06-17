<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offerstable $offerstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offerstable->offers_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offerstable->offers_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Offerstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offerstable form content">
            <?= $this->Form->create($offerstable) ?>
            <fieldset>
                <legend><?= __('Edit Offerstable') ?></legend>
                <?php
                    echo $this->Form->control('offer_names');
                    echo $this->Form->control('offer_descriptions');
                    echo $this->Form->control('offer_start_dates', ['empty' => true]);
                    echo $this->Form->control('offer_final_dates', ['empty' => true]);
                    echo $this->Form->control('offer_prices');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
