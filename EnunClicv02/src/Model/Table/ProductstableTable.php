<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productstable Model
 *
 * @method \App\Model\Entity\Productstable newEmptyEntity()
 * @method \App\Model\Entity\Productstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Productstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Productstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Productstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Productstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Productstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Productstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductstableTable extends Table
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

        $this->setTable('productstable');
        $this->setDisplayField('order_id');
        $this->setPrimaryKey('order_id');
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
            ->integer('order_quantities')
            ->allowEmptyString('order_quantities');

        $validator
            ->scalar('order_descriptions')
            ->allowEmptyString('order_descriptions');

        $validator
            ->integer('order_prices')
            ->allowEmptyString('order_prices');

        return $validator;
    }
}
