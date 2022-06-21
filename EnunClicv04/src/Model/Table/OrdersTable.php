<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\DeliveriesTable&\Cake\ORM\Association\BelongsTo $Deliveries
 * @property \App\Model\Table\CostumersTable&\Cake\ORM\Association\BelongsTo $Costumers
 * @property \App\Model\Table\ZonesTable&\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\HasMany $Products
 *
 * @method \App\Model\Entity\Order newEmptyEntity()
 * @method \App\Model\Entity\Order newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('orders_id');
        $this->setPrimaryKey('orders_id');

        $this->belongsTo('Deliveries', [
            'foreignKey' => 'deliverymans_id',
        ]);
        $this->belongsTo('Costumers', [
            'foreignKey' => 'costumers_id',
        ]);
        $this->belongsTo('Zones', [
            'foreignKey' => 'zones_id',
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'order_id',
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
            ->scalar('order_addresses')
            ->allowEmptyString('order_addresses');

        $validator
            ->scalar('referencees')
            ->allowEmptyString('referencees');

        $validator
            ->date('dates')
            ->allowEmptyDate('dates');

        $validator
            ->time('times')
            ->allowEmptyTime('times');

        $validator
            ->integer('fees')
            ->allowEmptyString('fees');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('orders_gps')
            ->allowEmptyString('orders_gps');

        $validator
            ->integer('deliverymans_id')
            ->allowEmptyString('deliverymans_id');

        $validator
            ->integer('costumers_id')
            ->allowEmptyString('costumers_id');

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
        $rules->add($rules->existsIn('deliverymans_id', 'Deliveries'), ['errorField' => 'deliverymans_id']);
        $rules->add($rules->existsIn('costumers_id', 'Costumers'), ['errorField' => 'costumers_id']);
        $rules->add($rules->existsIn('zones_id', 'Zones'), ['errorField' => 'zones_id']);

        return $rules;
    }
}
