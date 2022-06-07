<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supplierstable Model
 *
 * @method \App\Model\Entity\Supplierstable newEmptyEntity()
 * @method \App\Model\Entity\Supplierstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supplierstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supplierstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supplierstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supplierstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supplierstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supplierstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplierstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SupplierstableTable extends Table
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

        $this->setTable('supplierstable');
        $this->setDisplayField('supplier_id');
        $this->setPrimaryKey('supplier_id');
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
            ->scalar('supplier_names')
            ->allowEmptyString('supplier_names');

        $validator
            ->scalar('supplier_addresses')
            ->allowEmptyString('supplier_addresses');

        $validator
            ->integer('supplier_phones')
            ->requirePresence('supplier_phones', 'create')
            ->notEmptyString('supplier_phones');

        return $validator;
    }
}
