<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paymentstable Model
 *
 * @method \App\Model\Entity\Paymentstable newEmptyEntity()
 * @method \App\Model\Entity\Paymentstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Paymentstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paymentstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paymentstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Paymentstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paymentstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paymentstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paymentstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paymentstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paymentstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paymentstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paymentstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PaymentstableTable extends Table
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

        $this->setTable('paymentstable');
        $this->setDisplayField('payment_id');
        $this->setPrimaryKey('payment_id');
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
            ->scalar('payment_methods')
            ->requirePresence('payment_methods', 'create')
            ->notEmptyString('payment_methods');

        $validator
            ->scalar('payment_receipts')
            ->allowEmptyString('payment_receipts');

        return $validator;
    }
}
