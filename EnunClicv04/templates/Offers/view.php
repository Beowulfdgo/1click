<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offer $offer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offer'), ['action' => 'edit', $offer->offers_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offer'), ['action' => 'delete', $offer->offers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->offers_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offers view content">
            <h3><?= h($offer->offers_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offer Names') ?></th>
                    <td><?= h($offer->offer_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $offer->has('product') ? $this->Html->link($offer->product->order_id, ['controller' => 'Products', 'action' => 'view', $offer->product->order_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Offers Id') ?></th>
                    <td><?= $this->Number->format($offer->offers_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Prices') ?></th>
                    <td><?= $offer->offer_prices === null ? '' : $this->Number->format($offer->offer_prices) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Start Dates') ?></th>
                    <td><?= h($offer->offer_start_dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offer Final Dates') ?></th>
                    <td><?= h($offer->offer_final_dates) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Offer Descriptions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offer->offer_descriptions)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
