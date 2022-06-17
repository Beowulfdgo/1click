<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliveriestable[]|\Cake\Collection\CollectionInterface $deliveriestable
 */
?>
<div class="deliveriestable index content">
    <?= $this->Html->link(__('Nuevo Repartidor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Repartidores') ?></h3>
    <div class="table-responsive">
    <?= $this->Html->link(__('Regresar'), ['controller'=>'users','action' => 'home'], ['class' => 'button float-right']) ?>
        <table>
            <thead>
                <tr>
                <th><?= $this->Paginator->sort('delivery_man_id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('delivery_man_names',['label' => 'Nombre']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deliveriestable as $deliveriestable): ?>
                <tr>
                    <td><?= $this->Number->format($deliveriestable->delivery_man_id) ?></td>
                    <td><?= h($deliveriestable->delivery_man_names) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'View', $deliveriestable->delivery_man_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'Edit', $deliveriestable->delivery_man_id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'Delete', $deliveriestable->delivery_man_id], ['confirm' => __('Está seguro de querer eliminar al repartidor # {0}?', $deliveriestable->delivery_man_id)]) ?>
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