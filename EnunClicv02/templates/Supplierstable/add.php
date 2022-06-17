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
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierstable form content">
            <?= $this->Form->create($supplierstable) ?>
            <fieldset>
                <legend><?= __('Añadir Proveedor') ?></legend>
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