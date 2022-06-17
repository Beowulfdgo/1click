<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailyregisterstable $dailyregisterstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $dailyregisterstable->register_id],
                ['confirm' => __('Está seguro de querer eliminar el registro diario # {0}?', $dailyregisterstable->register_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Registro Diario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dailyregisterstable form content">
            <?= $this->Form->create($dailyregisterstable) ?>
            <fieldset>
                <legend><?= __('Editar Registro Diario') ?></legend>
                <?php
                    echo $this->Form->control('register_status',['label' => 'Estado']);
                    echo $this->Form->control('daily_initial_cashes',['label' => 'Caja Incial ']);
                    echo $this->Form->control('daily_final_cashes',['label' => 'Caja Final']);
                    echo $this->Form->control('register_dates', ['empty' => true, 'label' => 'Fecha']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
