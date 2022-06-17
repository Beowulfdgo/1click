<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offerstable[]|\Cake\Collection\CollectionInterface $offerstable
 */
?>
<div class="offerstable index content">
    <?= $this->Html->link(__('New Offerstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offerstable') ?></h3>
    <div class="table-responsive">
    <h3>
        <a href="http://localhost:8765/users/home" tarjet="_blank">Regresar</a>
    </h3>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('offers_id') ?></th>
                    <th><?= $this->Paginator->sort('offer_names') ?></th>
                    <th><?= $this->Paginator->sort('offer_start_dates') ?></th>
                    <th><?= $this->Paginator->sort('offer_final_dates') ?></th>
                    <th><?= $this->Paginator->sort('offer_prices') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offerstable as $offerstable): ?>
                <tr>
                    <td><?= $this->Number->format($offerstable->offers_id) ?></td>
                    <td><?= h($offerstable->offer_names) ?></td>
                    <td><?= h($offerstable->offer_start_dates) ?></td>
                    <td><?= h($offerstable->offer_final_dates) ?></td>
                    <td><?= $offerstable->offer_prices === null ? '' : $this->Number->format($offerstable->offer_prices) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offerstable->offers_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offerstable->offers_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offerstable->offers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerstable->offers_id)]) ?>
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
