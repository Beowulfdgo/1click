<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adstable[]|\Cake\Collection\CollectionInterface $adstable
 */
?>
<div class="adstable index content">
    <?= $this->Html->link(__('New Adstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Adstable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ads_id') ?></th>
                    <th><?= $this->Paginator->sort('ads_names') ?></th>
                    <th><?= $this->Paginator->sort('ads_start_dates') ?></th>
                    <th><?= $this->Paginator->sort('ads_end_dates') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adstable as $adstable): ?>
                <tr>
                    <td><?= $this->Number->format($adstable->ads_id) ?></td>
                    <td><?= h($adstable->ads_names) ?></td>
                    <td><?= h($adstable->ads_start_dates) ?></td>
                    <td><?= h($adstable->ads_end_dates) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $adstable->ads_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adstable->ads_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adstable->ads_id], ['confirm' => __('Are you sure you want to delete # {0}?', $adstable->ads_id)]) ?>
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
