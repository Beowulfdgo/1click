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
            <?= $this->Html->link(__('Lista de Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumerstable form content">
            <?= $this->Form->create($costumerstable) ?>
            <fieldset>
                <legend><?= __('Nuevo Cliente') ?></legend>
                <?php
                    echo $this->Form->control('costumer_names',['label' => 'Nombre']);
                    echo $this->Form->control('costumer_addresses',['label' => 'Dirección']);
                    echo $this->Form->control('costumer_gps',['label' => 'GPS']);
                    echo $this->Form->control('costumer_phones',['label' => 'Teléfono']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
