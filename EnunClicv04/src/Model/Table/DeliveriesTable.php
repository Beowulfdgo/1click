<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deliveries Model
 *
 * @method \App\Model\Entity\Delivery newEmptyEntity()
 * @method \App\Model\Entity\Delivery newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Delivery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Delivery get($primaryKey, $options = [])
 * @method \App\Model\Entity\Delivery findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Delivery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Delivery[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Delivery|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Delivery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Delivery[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Delivery[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Delivery[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Delivery[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DeliveriesTable extends Table
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

        $this->setTable('deliveries');
        $this->setDisplayField('delivery_man_id');
        $this->setPrimaryKey('delivery_man_id');

        $this->belongsTo('Zones', [
            'foreignKey' => 'zones_id',
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
            ->scalar('delivery_man_names')
            ->allowEmptyString('delivery_man_names');

        $validator
            ->scalar('delivery_man_schedules')
            ->allowEmptyString('delivery_man_schedules');

        $validator
            ->scalar('delivery_man_days')
            ->allowEmptyString('delivery_man_days');

        $validator
            ->integer('zones_id')
            ->allowEmptyString('zones_id');

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
        $rules->add($rules->existsIn('zones_id', 'Zones'), ['errorField' => 'zones_id']);

        return $rules;
    }
}
