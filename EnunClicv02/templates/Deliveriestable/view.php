<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliveriestable $deliveriestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Repartidor'), ['action' => 'edit', $deliveriestable->delivery_man_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Repartidor'), ['action' => 'delete', $deliveriestable->delivery_man_id], ['confirm' => __('Está seguro de eliminar al repartidor # {0}?', $deliveriestable->delivery_man_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Repartidores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Repartidor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveriestable view content">
            <h3><?= h($deliveriestable->delivery_man_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($deliveriestable->delivery_man_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($deliveriestable->delivery_man_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Horas') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($deliveriestable->delivery_man_schedules)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Dias') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($deliveriestable->delivery_man_days)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>