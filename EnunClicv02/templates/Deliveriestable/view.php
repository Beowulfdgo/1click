<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliveriestable $deliveriestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Deliveriestable'), ['action' => 'edit', $deliveriestable->delivery_man_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Deliveriestable'), ['action' => 'delete', $deliveriestable->delivery_man_id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveriestable->delivery_man_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Deliveriestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Deliveriestable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveriestable view content">
            <h3><?= h($deliveriestable->delivery_man_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Delivery Man Names') ?></th>
                    <td><?= h($deliveriestable->delivery_man_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Man Id') ?></th>
                    <td><?= $this->Number->format($deliveriestable->delivery_man_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Delivery Man Schedules') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($deliveriestable->delivery_man_schedules)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Delivery Man Days') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($deliveriestable->delivery_man_days)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
