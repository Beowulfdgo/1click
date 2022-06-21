<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preference[]|\Cake\Collection\CollectionInterface $preferences
 */
?>
<div class="preferences index content">
    <?= $this->Html->link(__('New Preference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Preferences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('preferents_id') ?></th>
                    <th><?= $this->Paginator->sort('preferent_fees') ?></th>
                    <th><?= $this->Paginator->sort('costumers_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preferences as $preference): ?>
                <tr>
                    <td><?= $this->Number->format($preference->preferents_id) ?></td>
                    <td><?= $preference->preferent_fees === null ? '' : $this->Number->format($preference->preferent_fees) ?></td>
                    <td><?= $preference->has('costumer') ? $this->Html->link($preference->costumer->costumer_id, ['controller' => 'Costumers', 'action' => 'view', $preference->costumer->costumer_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $preference->preferents_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $preference->preferents_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $preference->preferents_id], ['confirm' => __('Are you sure you want to delete # {0}?', $preference->preferents_id)]) ?>
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
