<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Bienvenido</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingrese su usuario y contraseña') ?></legend>
        <?= $this->Form->control('users', ['required' => true, 'label' => 'Usuario']) ?>
        <?= $this->Form->control('password', ['required' => true, 'label' => 'Contraseña']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Entrar')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Añadir Usuario", ['action' => 'add']) ?>
</div>