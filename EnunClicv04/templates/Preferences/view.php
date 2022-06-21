<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preference $preference
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Preference'), ['action' => 'edit', $preference->preferents_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Preference'), ['action' => 'delete', $preference->preferents_id], ['confirm' => __('Are you sure you want to delete # {0}?', $preference->preferents_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Preferences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Preference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferences view content">
            <h3><?= h($preference->preferents_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Costumer') ?></th>
                    <td><?= $preference->has('costumer') ? $this->Html->link($preference->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $preference->costumer->costumer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferents Id') ?></th>
                    <td><?= $this->Number->format($preference->preferents_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferent Fees') ?></th>
                    <td><?= $preference->preferent_fees === null ? '' : $this->Number->format($preference->preferent_fees) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Preferent Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($preference->preferent_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
