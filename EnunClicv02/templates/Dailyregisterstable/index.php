<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable[]|\Cake\Collection\CollectionInterface $dailyregisterstable
 */
?>
<div class="dailyregisterstable index content">
    <?= $this->Html->link(__('New Dailyregisterstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dailyregisterstable') ?></h3>
    <div class="table-responsive">
    <h3>
        <a href="http://localhost:8765/users/home" tarjet="_blank">Regresar</a>
    </h3>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('register_id') ?></th>
                    <th><?= $this->Paginator->sort('register_status') ?></th>
                    <th><?= $this->Paginator->sort('daily_initial_cashes') ?></th>
                    <th><?= $this->Paginator->sort('daily_final_cashes') ?></th>
                    <th><?= $this->Paginator->sort('register_dates') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dailyregisterstable as $dailyregisterstable): ?>
                <tr>
                    <td><?= $this->Number->format($dailyregisterstable->register_id) ?></td>
                    <td><?= h($dailyregisterstable->register_status) ?></td>
                    <td><?= $dailyregisterstable->daily_initial_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_initial_cashes) ?></td>
                    <td><?= $dailyregisterstable->daily_final_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_final_cashes) ?></td>
                    <td><?= h($dailyregisterstable->register_dates) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dailyregisterstable->register_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailyregisterstable->register_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailyregisterstable->register_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyregisterstable->register_id)]) ?>
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
