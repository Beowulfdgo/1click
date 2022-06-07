<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adstable $adstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Adstable'), ['action' => 'edit', $adstable->ads_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Adstable'), ['action' => 'delete', $adstable->ads_id], ['confirm' => __('Are you sure you want to delete # {0}?', $adstable->ads_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Adstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Adstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adstable view content">
            <h3><?= h($adstable->ads_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ads Names') ?></th>
                    <td><?= h($adstable->ads_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads Id') ?></th>
                    <td><?= $this->Number->format($adstable->ads_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads Start Dates') ?></th>
                    <td><?= h($adstable->ads_start_dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads End Dates') ?></th>
                    <td><?= h($adstable->ads_end_dates) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ads Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($adstable->ads_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
