<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offerstable $offerstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offerstable'), ['action' => 'edit', $offerstable->offers_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offerstable'), ['action' => 'delete', $offerstable->offers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerstable->offers_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offerstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offerstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offerstable view content">
            <h3><?= h($offerstable->offers_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offer Names') ?></th>
                    <td><?= h($offerstable->offer_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offers Id') ?></th>
                    <td><?= $this->Number->format($offerstable->offers_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Prices') ?></th>
                    <td><?= $offerstable->offer_prices === null ? '' : $this->Number->format($offerstable->offer_prices) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Start Dates') ?></th>
                    <td><?= h($offerstable->offer_start_dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Final Dates') ?></th>
                    <td><?= h($offerstable->offer_final_dates) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Offer Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offerstable->offer_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
