<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumerstable $costumerstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Clientes'), ['action' => 'edit', $costumerstable->costumer_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Clientes'), ['action' => 'delete', $costumerstable->costumer_id], ['confirm' => __('Está seguro de querer eliminar el cliente # {0}?', $costumerstable->costumer_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumerstable view content">
            <h3><?= h($costumerstable->costumer_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre ') ?></th>
                    <td><?= h($costumerstable->costumer_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirección ') ?></th>
                    <td><?= h($costumerstable->costumer_addresses) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id ') ?></th>
                    <td><?= $this->Number->format($costumerstable->costumer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teléfono') ?></th>
                    <td><?= $this->Number->format($costumerstable->costumer_phones) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __("GPS") ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($costumerstable->costumer_gps)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
