<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserstableRolestable Model
 *
 * @property \App\Model\Table\UserstableTable&\Cake\ORM\Association\BelongsTo $Userstable
 * @property \App\Model\Table\RolestableTable&\Cake\ORM\Association\BelongsTo $Rolestable
 *
 * @method \App\Model\Entity\UserstableRolestable newEmptyEntity()
 * @method \App\Model\Entity\UserstableRolestable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UserstableRolestable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserstableRolestable get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserstableRolestable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UserstableRolestable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserstableRolestable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserstableRolestable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserstableRolestable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserstableRolestable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserstableRolestable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserstableRolestable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserstableRolestable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UserstableRolestableTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('userstable_rolestable');

        $this->belongsTo('Userstable', [
            'foreignKey' => 'userstable_users_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Rolestable', [
            'foreignKey' => 'rolestable_roles_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('userstable_users_id')
            ->requirePresence('userstable_users_id', 'create')
            ->notEmptyString('userstable_users_id');

        $validator
            ->integer('rolestable_roles_id')
            ->requirePresence('rolestable_roles_id', 'create')
            ->notEmptyString('rolestable_roles_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('userstable_users_id', 'Userstable'), ['errorField' => 'userstable_users_id']);
        $rules->add($rules->existsIn('rolestable_roles_id', 'Rolestable'), ['errorField' => 'rolestable_roles_id']);

        return $rules;
    }
}
