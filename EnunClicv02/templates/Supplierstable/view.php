<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable $supplierstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Proveedor'), ['action' => 'edit', $supplierstable->supplier_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Proveedor'), ['action' => 'delete', $supplierstable->supplier_id], ['confirm' => __('Está seguro de querer eliminar el proveedor # {0}?', $supplierstable->supplier_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierstable view content">
            <h3><?= h($supplierstable->supplier_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($supplierstable->supplier_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirección') ?></th>
                    <td><?= h($supplierstable->supplier_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supplierstable->supplier_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teléfono') ?></th>
                    <td><?= $this->Number->format($supplierstable->supplier_phones) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>