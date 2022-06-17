<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userstable $userstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userstable->users_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userstable->users_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Userstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userstable form content">
            <?= $this->Form->create($userstable) ?>
            <fieldset>
                <legend><?= __('Edit Userstable') ?></legend>
                <?php
                    echo $this->Form->control('users');
                    echo $this->Form->control('passwords');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
