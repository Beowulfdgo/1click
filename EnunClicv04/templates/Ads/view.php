<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ad $ad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->ads_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->ads_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->ads_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ads view content">
            <h3><?= h($ad->ads_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ads Names') ?></th>
                    <td><?= h($ad->ads_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer') ?></th>
                    <td><?= $ad->has('costumer') ? $this->Html->link($ad->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $ad->costumer->costumer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads Id') ?></th>
                    <td><?= $this->Number->format($ad->ads_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads Start Dates') ?></th>
                    <td><?= h($ad->ads_start_dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ads End Dates') ?></th>
                    <td><?= h($ad->ads_end_dates) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ads Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ad->ads_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
