<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderstable $orderstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Pedido'), ['action' => 'edit', $orderstable->orders_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Pedido'), ['action' => 'delete', $orderstable->orders_id], ['confirm' => __('Está seguro de querer eliminar el pedido # {0}?', $orderstable->orders_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Pedido'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderstable view content">
            <h3><?= h($orderstable->orders_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dirección') ?></th>
                    <td><?= h($orderstable->order_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencias') ?></th>
                    <td><?= h($orderstable->referencess) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($orderstable->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderstable->orders_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $orderstable->fees === null ? '' : $this->Number->format($orderstable->fees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($orderstable->dates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($orderstable->times) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('GPS') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orderstable->orders_gps)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
