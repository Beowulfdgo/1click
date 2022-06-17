<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Costumerstable Model
 *
 * @method \App\Model\Entity\Costumerstable newEmptyEntity()
 * @method \App\Model\Entity\Costumerstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Costumerstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Costumerstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Costumerstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Costumerstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Costumerstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Costumerstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Costumerstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Costumerstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumerstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumerstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumerstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CostumerstableTable extends Table
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

        $this->setTable('costumerstable');
        $this->setDisplayField('costumer_id');
        $this->setPrimaryKey('costumer_id');
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
            ->scalar('costumer_names')
            ->allowEmptyString('costumer_names');

        $validator
            ->scalar('costumer_addresses')
            ->allowEmptyString('costumer_addresses');

        $validator
            ->scalar('costumer_gps')
            ->allowEmptyString('costumer_gps');

        $validator
            ->integer('costumer_phones')
            ->requirePresence('costumer_phones', 'create')
            ->notEmptyString('costumer_phones');

        return $validator;
    }
}
