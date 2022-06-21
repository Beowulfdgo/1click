<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Zones Model
 *
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\Zone newEmptyEntity()
 * @method \App\Model\Entity\Zone newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Zone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Zone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Zone findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Zone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Zone[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Zone|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zone[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zone[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zone[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zone[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZonesTable extends Table
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

        $this->setTable('zones');
        $this->setDisplayField('zones_id');
        $this->setPrimaryKey('zones_id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'orders_id',
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
            ->scalar('initial_zones')
            ->allowEmptyString('initial_zones');

        $validator
            ->scalar('final_zones')
            ->allowEmptyString('final_zones');

        $validator
            ->scalar('descriptions')
            ->allowEmptyString('descriptions');

        $validator
            ->integer('orders_id')
            ->allowEmptyString('orders_id');

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
        $rules->add($rules->existsIn('orders_id', 'Orders'), ['errorField' => 'orders_id']);
        $rules->add($rules->existsIn('deliverymans_id', 'Deliveries'), ['errorField' => 'deliverymans_id']);

        return $rules;
    }
}
