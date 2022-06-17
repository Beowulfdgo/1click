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
            <?= $this->Html->link(__('Edit Zonestable'), ['action' => 'edit', $zonestable->zones_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Zonestable'), ['action' => 'delete', $zonestable->zones_id], ['confirm' => __('Are you sure you want to delete # {0}?', $zonestable->zones_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Zonestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Zonestable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zonestable view content">
            <h3><?= h($zonestable->zones_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Zones Id') ?></th>
                    <td><?= $this->Number->format($zonestable->zones_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Initial Zones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zonestable->initial_zones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Final Zones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zonestable->final_zones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($zonestable->descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
