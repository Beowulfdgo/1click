<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offer[]|\Cake\Collection\CollectionInterface $offers
 */
?>
<div class="offers index content">
    <?= $this->Html->link(__('New Offer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('offers_id') ?></th>
                    <th><?= $this->Paginator->sort('offer_names') ?></th>
                    <th><?= $this->Paginator->sort('offer_start_dates') ?></th>
                    <th><?= $this->Paginator->sort('offer_final_dates') ?></th>
                    <th><?= $this->Paginator->sort('offer_prices') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offers as $offer): ?>
                <tr>
                    <td><?= $this->Number->format($offer->offers_id) ?></td>
                    <td><?= h($offer->offer_names) ?></td>
                    <td><?= h($offer->offer_start_dates) ?></td>
                    <td><?= h($offer->offer_final_dates) ?></td>
                    <td><?= $offer->offer_prices === null ? '' : $this->Number->format($offer->offer_prices) ?></td>
                    <td><?= $offer->has('product') ? $this->Html->link($offer->product->order_id, ['controller' => 'Products', 'action' => 'view', $offer->product->order_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offer->offers_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offer->offers_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer->offers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->offers_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
