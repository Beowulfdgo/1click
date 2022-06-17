<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogisticstableDeliveriestable Model
 *
 * @property \App\Model\Table\LogisticstableTable&\Cake\ORM\Association\BelongsTo $Logisticstable
 * @property \App\Model\Table\DeliveriestableTable&\Cake\ORM\Association\BelongsTo $Deliveriestable
 *
 * @method \App\Model\Entity\LogisticstableDeliveriestable newEmptyEntity()
 * @method \App\Model\Entity\LogisticstableDeliveriestable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable get($primaryKey, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogisticstableDeliveriestable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LogisticstableDeliveriestableTable extends Table
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

        $this->setTable('logisticstable_deliveriestable');

        $this->belongsTo('Logisticstable', [
            'foreignKey' => 'logisticstable_logistics_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Deliveriestable', [
            'foreignKey' => 'deliveriestable_delivery_man_id',
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
            ->integer('logisticstable_logistics_id')
            ->requirePresence('logisticstable_logistics_id', 'create')
            ->notEmptyString('logisticstable_logistics_id');

        $validator
            ->integer('deliveriestable_delivery_man_id')
            ->requirePresence('deliveriestable_delivery_man_id', 'create')
            ->notEmptyString('deliveriestable_delivery_man_id');

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
        $rules->add($rules->existsIn('logisticstable_logistics_id', 'Logisticstable'), ['errorField' => 'logisticstable_logistics_id']);
        $rules->add($rules->existsIn('deliveriestable_delivery_man_id', 'Deliveriestable'), ['errorField' => 'deliveriestable_delivery_man_id']);

        return $rules;
    }
}
