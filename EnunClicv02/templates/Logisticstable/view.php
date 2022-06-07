<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logisticstable $logisticstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Logisticstable'), ['action' => 'edit', $logisticstable->logistics_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Logisticstable'), ['action' => 'delete', $logisticstable->logistics_id], ['confirm' => __('Are you sure you want to delete # {0}?', $logisticstable->logistics_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logisticstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Logisticstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="logisticstable view content">
            <h3><?= h($logisticstable->logistics_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Logistics Id') ?></th>
                    <td><?= $this->Number->format($logisticstable->logistics_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
