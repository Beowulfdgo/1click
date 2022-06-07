<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZonestableLogisticstable Model
 *
 * @property \App\Model\Table\ZonestableTable&\Cake\ORM\Association\BelongsTo $Zonestable
 * @property \App\Model\Table\LogisticstableTable&\Cake\ORM\Association\BelongsTo $Logisticstable
 *
 * @method \App\Model\Entity\ZonestableLogisticstable newEmptyEntity()
 * @method \App\Model\Entity\ZonestableLogisticstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonestableLogisticstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZonestableLogisticstableTable extends Table
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

        $this->setTable('zonestable_logisticstable');

        $this->belongsTo('Zonestable', [
            'foreignKey' => 'zonestable_zones_id',
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
            ->integer('zonestable_zones_id')
            ->requirePresence('zonestable_zones_id', 'create')
            ->notEmptyString('zonestable_zones_id');

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
        $rules->add($rules->existsIn('zonestable_zones_id', 'Zonestable'), ['errorField' => 'zonestable_zones_id']);
        $rules->add($rules->existsIn('logisticstable_logistics_id', 'Logisticstable'), ['errorField' => 'logisticstable_logistics_id']);

        return $rules;
    }
}
