<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZonesDeliveries Model
 *
 * @property \App\Model\Table\ZonesTable&\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\DeliveriesTable&\Cake\ORM\Association\BelongsTo $Deliveries
 *
 * @method \App\Model\Entity\ZonesDelivery newEmptyEntity()
 * @method \App\Model\Entity\ZonesDelivery newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ZonesDelivery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZonesDelivery get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZonesDelivery findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ZonesDelivery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZonesDelivery[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZonesDelivery|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZonesDelivery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZonesDelivery[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonesDelivery[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonesDelivery[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ZonesDelivery[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZonesDeliveriesTable extends Table
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

        $this->setTable('zones_deliveries');

        $this->belongsTo('Zones', [
            'foreignKey' => 'zones_id',
        ]);
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
            ->integer('zones_id')
            ->allowEmptyString('zones_id');

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
        $rules->add($rules->existsIn('zones_id', 'Zones'), ['errorField' => 'zones_id']);
        $rules->add($rules->existsIn('deliverymans_id', 'Deliveries'), ['errorField' => 'deliverymans_id']);

        return $rules;
    }
}
