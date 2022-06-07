<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolestable $rolestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolestable->roles_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolestable->roles_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rolestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolestable form content">
            <?= $this->Form->create($rolestable) ?>
            <fieldset>
                <legend><?= __('Edit Rolestable') ?></legend>
                <?php
                    echo $this->Form->control('roles');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
