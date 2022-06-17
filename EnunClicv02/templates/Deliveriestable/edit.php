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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $deliveriestable->id],
                ['confirm' => __('Está seguro de eliminar al repartidor # {0}?', $deliveriestable->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Repartidores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveriestable form content">
            <?= $this->Form->create($deliveriestable) ?>
            <fieldset>
                <legend><?= __('Editar Repartidor') ?></legend>
                <?php
                    echo $this->Form->control('delivery_man_names',['label' => 'Nombre']);
                    echo $this->Form->control('delivery_man_schedules',['label' => 'Horas']);
                    echo $this->Form->control('delivery_man_days',['label' => 'Dias']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>