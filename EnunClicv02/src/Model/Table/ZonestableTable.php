<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Zonestable Model
 *
 * @method \App\Model\Entity\Zonestable newEmptyEntity()
 * @method \App\Model\Entity\Zonestable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Zonestable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Zonestable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Zonestable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Zonestable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Zonestable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Zonestable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zonestable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zonestable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zonestable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zonestable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Zonestable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ZonestableTable extends Table
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

        $this->setTable('zonestable');
        $this->setDisplayField('zones_id');
        $this->setPrimaryKey('zones_id');
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

        return $validator;
    }
}
