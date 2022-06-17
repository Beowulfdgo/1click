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
            <?= $this->Html->link(__('List Productstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productstable form content">
            <?= $this->Form->create($productstable) ?>
            <fieldset>
                <legend><?= __('Add Productstable') ?></legend>
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
