<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preferencetable $preferencetable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista de Clientes Preferidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferencetable form content">
            <?= $this->Form->create($preferencetable) ?>
            <fieldset>
                <legend><?= __('Nuevo Cliente Preferido') ?></legend>
                <?php
                    echo $this->Form->control('preferent_descriptions',['label' => 'Descripción']);
                    echo $this->Form->control('preferent_fees',['label' => 'Descuento']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
