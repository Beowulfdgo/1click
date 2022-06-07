<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumerstable $costumerstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $costumerstable->costumer_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $costumerstable->costumer_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Costumerstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumerstable form content">
            <?= $this->Form->create($costumerstable) ?>
            <fieldset>
                <legend><?= __('Edit Costumerstable') ?></legend>
                <?php
                    echo $this->Form->control('costumer_names');
                    echo $this->Form->control('costumer_addresses');
                    echo $this->Form->control('costumer_gps');
                    echo $this->Form->control('costumer_phones');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
