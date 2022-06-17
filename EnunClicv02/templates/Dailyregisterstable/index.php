<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable[]|\Cake\Collection\CollectionInterface $dailyregisterstable
 */
?>
<div class="dailyregisterstable index content">
    <?= $this->Html->link(__('Nuevo Registro Diario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registro Diario') ?></h3>
    <div class="table-responsive">
    <h3>
    <?= $this->Html->link(__('Regresar'), [ 'controller' => 'Users', 'action' => 'home'], ['class' => 'button float-right']) ?>
    </h3>
        <table>
            <thead>
            <tr>
                    <th><?= $this->Paginator->sort('register_id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('register_status',['label' => 'Estado']) ?></th>
                    <th><?= $this->Paginator->sort('daily_initial_cashes',['label' => 'Caja Inicial']) ?></th>
                    <th><?= $this->Paginator->sort('daily_final_cashes',['label' => 'Caja Final']) ?></th>
                    <th><?= $this->Paginator->sort('register_dates',['label' => 'Fecha']) ?></th>
                    <th class="actions"><?= __('Acciones ') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dailyregisterstable as $dailyregisterstable): ?>
                <tr>
                    <td><?= $this->Number->format($dailyregisterstable->register_id) ?></td>
                    <td><?= h($dailyregisterstable->register_status) ?></td>
                    <td><?= $dailyregisterstable->daily_initial_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_initial_cashes) ?></td>
                    <td><?= $dailyregisterstable->daily_final_cashes === null ? '' : $this->Number->format($dailyregisterstable->daily_final_cashes) ?></td>
                    <td><?= h($dailyregisterstable->register_dates) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $dailyregisterstable->register_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dailyregisterstable->register_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $dailyregisterstable->register_id], ['confirm' => __('Está seguro de querer eliminar el registro diario # {0}?', $dailyregisterstable->register_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
</div>
    </div>
</div>
