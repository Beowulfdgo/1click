<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userstable $userstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Userstable'), ['action' => 'edit', $userstable->users_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Userstable'), ['action' => 'delete', $userstable->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userstable->users_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Userstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Userstable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userstable view content">
            <h3><?= h($userstable->users_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Users') ?></th>
                    <td><?= h($userstable->users) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passwords') ?></th>
                    <td><?= h($userstable->passwords) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Id') ?></th>
                    <td><?= $this->Number->format($userstable->users_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
