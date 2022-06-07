<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolestable $rolestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rolestable'), ['action' => 'edit', $rolestable->roles_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rolestable'), ['action' => 'delete', $rolestable->roles_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolestable->roles_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rolestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rolestable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolestable view content">
            <h3><?= h($rolestable->roles_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Roles') ?></th>
                    <td><?= h($rolestable->roles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Roles Id') ?></th>
                    <td><?= $this->Number->format($rolestable->roles_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
