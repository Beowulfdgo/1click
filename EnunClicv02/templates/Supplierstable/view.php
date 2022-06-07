<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable $supplierstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplierstable'), ['action' => 'edit', $supplierstable->supplier_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplierstable'), ['action' => 'delete', $supplierstable->supplier_id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierstable->supplier_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supplierstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplierstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierstable view content">
            <h3><?= h($supplierstable->supplier_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier Names') ?></th>
                    <td><?= h($supplierstable->supplier_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Addresses') ?></th>
                    <td><?= h($supplierstable->supplier_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Id') ?></th>
                    <td><?= $this->Number->format($supplierstable->supplier_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Phones') ?></th>
                    <td><?= $this->Number->format($supplierstable->supplier_phones) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
