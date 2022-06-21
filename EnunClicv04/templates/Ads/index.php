<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ad[]|\Cake\Collection\CollectionInterface $ads
 */
?>
<div class="ads index content">
    <?= $this->Html->link(__('New Ad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ads') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ads_id') ?></th>
                    <th><?= $this->Paginator->sort('ads_names') ?></th>
                    <th><?= $this->Paginator->sort('ads_start_dates') ?></th>
                    <th><?= $this->Paginator->sort('ads_end_dates') ?></th>
                    <th><?= $this->Paginator->sort('costumers_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ads as $ad): ?>
                <tr>
                    <td><?= $this->Number->format($ad->ads_id) ?></td>
                    <td><?= h($ad->ads_names) ?></td>
                    <td><?= h($ad->ads_start_dates) ?></td>
                    <td><?= h($ad->ads_end_dates) ?></td>
                    <td><?= $ad->has('costumer') ? $this->Html->link($ad->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $ad->costumer->costumer_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ad->ads_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ad->ads_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ad->ads_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->ads_id)]) ?>
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
