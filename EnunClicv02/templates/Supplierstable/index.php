<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable[]|\Cake\Collection\CollectionInterface $supplierstable
 */
?>
<div class="supplierstable index content">
    <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedores') ?></h3>
    <?= $this->Html->link(__('Regresar'), [ 'controller' => 'Users', 'action' => 'home'], ['class' => 'button float-right']) ?>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                    <th><?= $this->Paginator->sort('supplier_id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('supplier_names',['label' => 'Nombre']) ?></th>
                    <th><?= $this->Paginator->sort('supplier_addresses',['label' => 'Dirección']) ?></th>
                    <th><?= $this->Paginator->sort('supplier_phones',['label' => 'Teléfono']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplierstable as $supplierstable): ?>
                <tr>
                    <td><?= $this->Number->format($supplierstable->supplier_id) ?></td>
                    <td><?= h($supplierstable->supplier_names) ?></td>
                    <td><?= h($supplierstable->supplier_addresses) ?></td>
                    <td><?= $this->Number->format($supplierstable->supplier_phones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $supplierstable->supplier_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $supplierstable->supplier_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $supplierstable->supplier_id], ['confirm' => __('Está seguro de querer eliminar el proveedor # {0}?', $supplierstable->supplier_id)]) ?>
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