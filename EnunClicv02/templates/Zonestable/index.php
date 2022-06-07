<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zonestable[]|\Cake\Collection\CollectionInterface $zonestable
 */
?>
<div class="zonestable index content">
    <?= $this->Html->link(__('New Zonestable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Zonestable') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('zones_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zonestable as $zonestable): ?>
                <tr>
                    <td><?= $this->Number->format($zonestable->zones_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $zonestable->zones_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zonestable->zones_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zonestable->zones_id], ['confirm' => __('Are you sure you want to delete # {0}?', $zonestable->zones_id)]) ?>
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
