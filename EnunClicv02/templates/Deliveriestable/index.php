<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliveriestable[]|\Cake\Collection\CollectionInterface $deliveriestable
 */
?>
<div class="deliveriestable index content">
    <?= $this->Html->link(__('New Deliveriestable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Deliveriestable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('delivery_man_id') ?></th>
                    <th><?= $this->Paginator->sort('delivery_man_names') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deliveriestable as $deliveriestable): ?>
                <tr>
                    <td><?= $this->Number->format($deliveriestable->delivery_man_id) ?></td>
                    <td><?= h($deliveriestable->delivery_man_names) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $deliveriestable->delivery_man_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deliveriestable->delivery_man_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deliveriestable->delivery_man_id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveriestable->delivery_man_id)]) ?>
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
