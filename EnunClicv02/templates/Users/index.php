<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
    <?= $this->Html->link(__('Regresar'), [ 'controller' => 'Users', 'action' => 'home'], ['class' => 'button float-right']) ?>
    
        <table>
            <thead>
            <tr>
                    <th><?= $this->Paginator->sort('id',['label' => 'Id']) ?></th>
                    <th><?= $this->Paginator->sort('role',['label' => 'Rol']) ?></th>
                    <th><?= $this->Paginator->sort('users',['label' => 'Usuario']) ?></th>
                    <th><?= $this->Paginator->sort('created',['label' => 'Creado']) ?></th>
                    <th><?= $this->Paginator->sort('modified',['label' => 'Modificado']) ?></th>
                    <th class="actions"><?= __(' ') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->users) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Está seguro de querer eliminar el usuario # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>
