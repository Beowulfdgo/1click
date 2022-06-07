<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable $supplierstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Supplierstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierstable form content">
            <?= $this->Form->create($supplierstable) ?>
            <fieldset>
                <legend><?= __('Add Supplierstable') ?></legend>
                <?php
                    echo $this->Form->control('supplier_names');
                    echo $this->Form->control('supplier_addresses');
                    echo $this->Form->control('supplier_phones');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
