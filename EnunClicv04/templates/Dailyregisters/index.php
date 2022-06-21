<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregister[]|\Cake\Collection\CollectionInterface $dailyregisters
 */
?>
<div class="dailyregisters index content">
    <?= $this->Html->link(__('New Dailyregister'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dailyregisters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('register_id') ?></th>
                    <th><?= $this->Paginator->sort('register_status') ?></th>
                    <th><?= $this->Paginator->sort('daily_initial_cashes') ?></th>
                    <th><?= $this->Paginator->sort('daily_final_cashes') ?></th>
                    <th><?= $this->Paginator->sort('register_dates') ?></th>
                    <th><?= $this->Paginator->sort('deliverymans_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dailyregisters as $dailyregister): ?>
                <tr>
                    <td><?= $this->Number->format($dailyregister->register_id) ?></td>
                    <td><?= h($dailyregister->register_status) ?></td>
                    <td><?= $dailyregister->daily_initial_cashes === null ? '' : $this->Number->format($dailyregister->daily_initial_cashes) ?></td>
                    <td><?= $dailyregister->daily_final_cashes === null ? '' : $this->Number->format($dailyregister->daily_final_cashes) ?></td>
                    <td><?= h($dailyregister->register_dates) ?></td>
                    <td><?= $dailyregister->has('delivery') ? $this->Html->link($dailyregister->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $dailyregister->delivery->delivery_man_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dailyregister->register_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailyregister->register_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailyregister->register_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyregister->register_id)]) ?>
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
