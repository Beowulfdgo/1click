<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumerstable $costumerstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Costumerstable'), ['action' => 'edit', $costumerstable->costumer_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Costumerstable'), ['action' => 'delete', $costumerstable->costumer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $costumerstable->costumer_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Costumerstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Costumerstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumerstable view content">
            <h3><?= h($costumerstable->costumer_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Costumer Names') ?></th>
                    <td><?= h($costumerstable->costumer_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Addresses') ?></th>
                    <td><?= h($costumerstable->costumer_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Id') ?></th>
                    <td><?= $this->Number->format($costumerstable->costumer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costumer Phones') ?></th>
                    <td><?= $this->Number->format($costumerstable->costumer_phones) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Costumer Gps') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($costumerstable->costumer_gps)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
