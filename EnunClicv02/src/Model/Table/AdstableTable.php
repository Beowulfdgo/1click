<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adstable Model
 *
 * @method \App\Model\Entity\Adstable newEmptyEntity()
 * @method \App\Model\Entity\Adstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Adstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Adstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdstableTable extends Table
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

        $this->setTable('adstable');
        $this->setDisplayField('ads_id');
        $this->setPrimaryKey('ads_id');
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
            ->scalar('ads_names')
            ->allowEmptyString('ads_names');

        $validator
            ->scalar('ads_descriptions')
            ->allowEmptyString('ads_descriptions');

        $validator
            ->date('ads_start_dates')
            ->allowEmptyDate('ads_start_dates');

        $validator
            ->date('ads_end_dates')
            ->allowEmptyDate('ads_end_dates');

        return $validator;
    }
}
