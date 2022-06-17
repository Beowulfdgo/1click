<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable $dailyregisterstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Registro Diario'), ['action' => 'edit', $dailyregisterstable->register_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Registro Diario'), ['action' => 'delete', $dailyregisterstable->register_id], ['confirm' => __('Está seguro de querer eliminar el registro diario # {0}?', $dailyregisterstable->register_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Registro Diario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Registro Diario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisterstable view content">
            <h3><?= h($dailyregisterstable->register_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($dailyregisterstable->register_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dailyregisterstable->register_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caja Inicial') ?></th>
                    <td><?= $dailyregisterstable->daily_initial_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_initial_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caja Final') ?></th>
                    <td><?= $dailyregisterstable->daily_final_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_final_cashes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($dailyregisterstable->register_dates) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
