<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logisticstable[]|\Cake\Collection\CollectionInterface $logisticstable
 */
?>
<div class="logisticstable index content">
    <?= $this->Html->link(__('New Logisticstable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Logisticstable') ?></h3>
    <div class="table-responsive">
    <h3>
        <a href="http://localhost:8765/users/home" tarjet="_blank">Regresar</a>
    </h3>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('logistics_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logisticstable as $logisticstable): ?>
                <tr>
                    <td><?= $this->Number->format($logisticstable->logistics_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $logisticstable->logistics_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logisticstable->logistics_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logisticstable->logistics_id], ['confirm' => __('Are you sure you want to delete # {0}?', $logisticstable->logistics_id)]) ?>
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
