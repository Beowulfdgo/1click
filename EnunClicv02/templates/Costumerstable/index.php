<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumerstable[]|\Cake\Collection\CollectionInterface $costumerstable
 */
?>
<div class="costumerstable index content">
    <?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
    <h3>
    <?= $this->Html->link(__('Regresar'), [ 'controller' => 'Users', 'action' => 'home'], ['class' => 'button float-right']) ?>
    </h3>
        <table>
            <thead>
            <tr>
                    <th><?= $this->Paginator->sort('costumer_id', ['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('costumer_names',['label' => 'Nombre']) ?></th>
                    <th><?= $this->Paginator->sort('costumer_addresses',['label' => 'Dirección']) ?></th>
                    <th><?= $this->Paginator->sort('costumer_phones',['label' => 'Teléfono']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($costumerstable as $costumerstable): ?>
                <tr>
                    <td><?= $this->Number->format($costumerstable->costumer_id) ?></td>
                    <td><?= h($costumerstable->costumer_names) ?></td>
                    <td><?= h($costumerstable->costumer_addresses) ?></td>
                    <td><?= $this->Number->format($costumerstable->costumer_phones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $costumerstable->costumer_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $costumerstable->costumer_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $costumerstable->costumer_id], ['confirm' => __('Está seguro de querer eliminar el cliente # {0}?', $costumerstable->costumer_id)]) ?>
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
