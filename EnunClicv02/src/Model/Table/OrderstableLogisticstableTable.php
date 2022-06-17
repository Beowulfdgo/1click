<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderstableLogisticstable Model
 *
 * @property \App\Model\Table\OrderstableTable&\Cake\ORM\Association\BelongsTo $Orderstable
 * @property \App\Model\Table\LogisticstableTable&\Cake\ORM\Association\BelongsTo $Logisticstable
 *
 * @method \App\Model\Entity\OrderstableLogisticstable newEmptyEntity()
 * @method \App\Model\Entity\OrderstableLogisticstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderstableLogisticstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrderstableLogisticstableTable extends Table
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

        $this->setTable('orderstable_logisticstable');

        $this->belongsTo('Orderstable', [
            'foreignKey' => 'orderstable_orders_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Logisticstable', [
            'foreignKey' => 'logisticstable_logistics_id',
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
            ->integer('orderstable_orders_id')
            ->requirePresence('orderstable_orders_id', 'create')
            ->notEmptyString('orderstable_orders_id');

        $validator
            ->integer('logisticstable_logistics_id')
            ->requirePresence('logisticstable_logistics_id', 'create')
            ->notEmptyString('logisticstable_logistics_id');

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
        $rules->add($rules->existsIn('orderstable_orders_id', 'Orderstable'), ['errorField' => 'orderstable_orders_id']);
        $rules->add($rules->existsIn('logisticstable_logistics_id', 'Logisticstable'), ['errorField' => 'logisticstable_logistics_id']);

        return $rules;
    }
}
