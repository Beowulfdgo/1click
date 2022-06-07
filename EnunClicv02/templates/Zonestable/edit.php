<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zonestable $zonestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $zonestable->zones_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $zonestable->zones_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Zonestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zonestable form content">
            <?= $this->Form->create($zonestable) ?>
            <fieldset>
                <legend><?= __('Edit Zonestable') ?></legend>
                <?php
                    echo $this->Form->control('initial_zones');
                    echo $this->Form->control('final_zones');
                    echo $this->Form->control('descriptions');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
