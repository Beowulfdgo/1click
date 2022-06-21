<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregister $dailyregister
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dailyregister'), ['action' => 'edit', $dailyregister->register_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dailyregister'), ['action' => 'delete', $dailyregister->register_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyregister->register_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dailyregisters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dailyregister'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisters view content">
            <h3><?= h($dailyregister->register_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Register Status') ?></th>
                    <td><?= h($dailyregister->register_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $dailyregister->has('delivery') ? $this->Html->link($dailyregister->delivery->delivery_man_id, ['controller' => 'Deliveries', 'action' => 'view', $dailyregister->delivery->delivery_man_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Register Id') ?></th>
                    <td><?= $this->Number->format($dailyregister->register_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daily Initial Cashes') ?></th>
                    <td><?= $dailyregister->daily_initial_cashes === null ? '' : $this->Number->format($dailyregister->daily_initial_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daily Final Cashes') ?></th>
                    <td><?= $dailyregister->daily_final_cashes === null ? '' : $this->Number->format($dailyregister->daily_final_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Register Dates') ?></th>
                    <td><?= h($dailyregister->register_dates) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
