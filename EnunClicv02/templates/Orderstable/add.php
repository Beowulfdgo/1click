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
            <?= $this->Html->link(__('Lista de Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderstable form content">
            <?= $this->Form->create($orderstable) ?>
            <fieldset>
                <legend><?= __('Nuevo Pedido') ?></legend>
                <?php
                    echo $this->Form->control('order_addresses',['label' => 'Dirección']);
                    echo $this->Form->control('referencess',['label' => 'Referencias']);
                    echo $this->Form->control('dates', ['empty' => true, 'label' => 'Fecha']);
                    echo $this->Form->control('times', ['empty' => true, 'label' => 'Hora']);
                    echo $this->Form->control('fees',['label' => 'Precio']);
                    echo $this->Form->control('status',['label' => 'Estado']);
                    echo $this->Form->control('orders_gps',['label' => 'GPS']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
