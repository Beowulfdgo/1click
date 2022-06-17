<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderstable[]|\Cake\Collection\CollectionInterface $orderstable
 */
?>
<div class="orderstable index content">
    <?= $this->Html->link(__('Nuevo Pedido'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedidos') ?></h3>
    <div class="table-responsive">
    <h3>
    <?= $this->Html->link(__('Regresar'), ['controller'=>'users','action' => 'home'], ['class' => 'button float-right']) ?>
    </h3>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('orders_id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('order_addresses',['label' => 'Dirección']) ?></th>
                    <th><?= $this->Paginator->sort('referencess',['label' => 'Referencias']) ?></th>
                    <th><?= $this->Paginator->sort('dates',['label' => 'Fecha']) ?></th>
                    <th><?= $this->Paginator->sort('times',['label' => 'Hora']) ?></th>
                    <th><?= $this->Paginator->sort('fees',['label' => 'Precio']) ?></th>
                    <th><?= $this->Paginator->sort('status',['label' => 'Estado']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderstable as $orderstable): ?>
                <tr>
                    <td><?= $this->Number->format($orderstable->orders_id) ?></td>
                    <td><?= h($orderstable->order_addresses) ?></td>
                    <td><?= h($orderstable->referencess) ?></td>
                    <td><?= h($orderstable->dates) ?></td>
                    <td><?= h($orderstable->times) ?></td>
                    <td><?= $orderstable->fees === null ? '' : $this->Number->format($orderstable->fees) ?></td>
                    <td><?= h($orderstable->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $orderstable->orders_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $orderstable->orders_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $orderstable->orders_id], ['confirm' => __('Está seguro de querer eliminar el pedido # {0}?', $orderstable->orders_id)]) ?>
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
