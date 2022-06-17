<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preferencetable[]|\Cake\Collection\CollectionInterface $preferencetable
 */
?>
<div class="preferencetable index content">
    <?= $this->Html->link(__('Nuevo Cliente Preferido'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes Preferidos') ?></h3>
    <div class="table-responsive">
    <h3>
    <?= $this->Html->link(__('Regresar'), ['controller'=>'users','action' => 'home'], ['class' => 'button float-right']) ?>
    </h3>
        <table>
            <thead>
            <tr>
                    <th><?= $this->Paginator->sort('preferents_id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('preferent_fees',['label' => 'Descuento']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preferencetable as $preferencetable): ?>
                <tr>
                    <td><?= $this->Number->format($preferencetable->preferents_id) ?></td>
                    <td><?= $preferencetable->preferent_fees === null ? '' : $this->Number->format($preferencetable->preferent_fees) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $preferencetable->preferents_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $preferencetable->preferents_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $preferencetable->preferents_id], ['confirm' => __('Está seguro de querer eliminar el cliente preferido # {0}?', $preferencetable->preferents_id)]) ?>
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
