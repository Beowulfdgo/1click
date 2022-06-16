<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preferencetable $preferencetable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Preferencetable'), ['action' => 'edit', $preferencetable->preferents_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Preferencetable'), ['action' => 'delete', $preferencetable->preferents_id], ['confirm' => __('Are you sure you want to delete # {0}?', $preferencetable->preferents_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Preferencetable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Preferencetable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferencetable view content">
            <h3><?= h($preferencetable->preferents_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Preferents Id') ?></th>
                    <td><?= $this->Number->format($preferencetable->preferents_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferent Fees') ?></th>
                    <td><?= $preferencetable->preferent_fees === null ? '' : $this->Number->format($preferencetable->preferent_fees) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Preferent Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($preferencetable->preferent_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
