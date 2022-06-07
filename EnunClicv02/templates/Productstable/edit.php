<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productstable $productstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productstable->order_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productstable->order_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productstable form content">
            <?= $this->Form->create($productstable) ?>
            <fieldset>
                <legend><?= __('Edit Productstable') ?></legend>
                <?php
                    echo $this->Form->control('order_quantities');
                    echo $this->Form->control('order_descriptions');
                    echo $this->Form->control('order_prices');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
