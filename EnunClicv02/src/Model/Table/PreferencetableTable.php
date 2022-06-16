<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Preferencetable Model
 *
 * @method \App\Model\Entity\Preferencetable newEmptyEntity()
 * @method \App\Model\Entity\Preferencetable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Preferencetable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Preferencetable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Preferencetable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Preferencetable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Preferencetable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Preferencetable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preferencetable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PreferencetableTable extends Table
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

        $this->setTable('preferencetable');
        $this->setDisplayField('preferents_id');
        $this->setPrimaryKey('preferents_id');
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
            ->scalar('preferent_descriptions')
            ->allowEmptyString('preferent_descriptions');

        $validator
            ->integer('preferent_fees')
            ->allowEmptyString('preferent_fees');

        return $validator;
    }
}
