<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Preferences Model
 *
 * @property \App\Model\Table\CostumersTable&\Cake\ORM\Association\BelongsTo $Costumers
 *
 * @method \App\Model\Entity\Preference newEmptyEntity()
 * @method \App\Model\Entity\Preference newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Preference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Preference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Preference findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Preference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Preference[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Preference|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preference saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preference[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preference[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preference[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preference[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PreferencesTable extends Table
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

        $this->setTable('preferences');
        $this->setDisplayField('preferents_id');
        $this->setPrimaryKey('preferents_id');

        $this->belongsTo('Costumers', [
            'foreignKey' => 'costumers_id',
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
            ->scalar('preferent_descriptions')
            ->allowEmptyString('preferent_descriptions');

        $validator
            ->integer('preferent_fees')
            ->allowEmptyString('preferent_fees');

        $validator
            ->integer('costumers_id')
            ->allowEmptyString('costumers_id');

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
        $rules->add($rules->existsIn('costumers_id', 'Costumers'), ['errorField' => 'costumers_id']);

        return $rules;
    }
}
