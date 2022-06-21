<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ads Model
 *
 * @property \App\Model\Table\CostumersTable&\Cake\ORM\Association\BelongsTo $Costumers
 *
 * @method \App\Model\Entity\Ad newEmptyEntity()
 * @method \App\Model\Entity\Ad newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ad findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ad[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ad[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ad[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ad[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ad[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdsTable extends Table
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

        $this->setTable('ads');
        $this->setDisplayField('ads_id');
        $this->setPrimaryKey('ads_id');

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
            ->scalar('ads_names')
            ->allowEmptyString('ads_names');

        $validator
            ->scalar('ads_descriptions')
            ->allowEmptyString('ads_descriptions');

        $validator
            ->date('ads_start_dates')
            ->allowEmptyDate('ads_start_dates');

        $validator
            ->date('ads_end_dates')
            ->allowEmptyDate('ads_end_dates');

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
