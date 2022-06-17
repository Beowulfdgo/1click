<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable $dailyregisterstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dailyregisterstable'), ['action' => 'edit', $dailyregisterstable->register_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dailyregisterstable'), ['action' => 'delete', $dailyregisterstable->register_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyregisterstable->register_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dailyregisterstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dailyregisterstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisterstable view content">
            <h3><?= h($dailyregisterstable->register_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Register Status') ?></th>
                    <td><?= h($dailyregisterstable->register_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Register Id') ?></th>
                    <td><?= $this->Number->format($dailyregisterstable->register_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daily Initial Cashes') ?></th>
                    <td><?= $dailyregisterstable->daily_initial_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_initial_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daily Final Cashes') ?></th>
                    <td><?= $dailyregisterstable->daily_final_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_final_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Register Dates') ?></th>
                    <td><?= h($dailyregisterstable->register_dates) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
