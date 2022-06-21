<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dailyregisters Model
 *
 * @property \App\Model\Table\DeliveriesTable&\Cake\ORM\Association\BelongsTo $Deliveries
 *
 * @method \App\Model\Entity\Dailyregister newEmptyEntity()
 * @method \App\Model\Entity\Dailyregister newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregister[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregister get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dailyregister findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dailyregister patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregister[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregister|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailyregister saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailyregister[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregister[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregister[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregister[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DailyregistersTable extends Table
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

        $this->setTable('dailyregisters');
        $this->setDisplayField('register_id');
        $this->setPrimaryKey('register_id');

        $this->belongsTo('Deliveries', [
            'foreignKey' => 'deliverymans_id',
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
            ->scalar('register_status')
            ->requirePresence('register_status', 'create')
            ->notEmptyString('register_status');

        $validator
            ->integer('daily_initial_cashes')
            ->allowEmptyString('daily_initial_cashes');

        $validator
            ->integer('daily_final_cashes')
            ->allowEmptyString('daily_final_cashes');

        $validator
            ->date('register_dates')
            ->allowEmptyDate('register_dates');

        $validator
            ->integer('deliverymans_id')
            ->allowEmptyString('deliverymans_id');

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
        $rules->add($rules->existsIn('deliverymans_id', 'Deliveries'), ['errorField' => 'deliverymans_id']);

        return $rules;
    }
}
