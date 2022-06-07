<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orderstable Model
 *
 * @method \App\Model\Entity\Orderstable newEmptyEntity()
 * @method \App\Model\Entity\Orderstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Orderstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orderstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orderstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Orderstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orderstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orderstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrderstableTable extends Table
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

        $this->setTable('orderstable');
        $this->setDisplayField('orders_id');
        $this->setPrimaryKey('orders_id');
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
            ->scalar('referencess')
            ->allowEmptyString('referencess');

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

        return $validator;
    }
}
