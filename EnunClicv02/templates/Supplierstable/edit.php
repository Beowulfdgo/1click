<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplierstable $supplierstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $supplierstable->supplier_id],
                ['confirm' => __('Está seguro de querer eliminar el proveedor # {0}?', $supplierstable->supplier_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierstable form content">
            <?= $this->Form->create($supplierstable) ?>
            <fieldset>
                <legend><?= __('Editar Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('supplier_names',['label' => 'Nombre']);
                    echo $this->Form->control('supplier_addresses',['label' => 'Dirección']);
                    echo $this->Form->control('supplier_phones',['label' => 'Teléfono']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>