<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dailyregisterstable Model
 *
 * @method \App\Model\Entity\Dailyregisterstable newEmptyEntity()
 * @method \App\Model\Entity\Dailyregisterstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregisterstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dailyregisterstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dailyregisterstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DailyregisterstableTable extends Table
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

        $this->setTable('dailyregisterstable');
        $this->setDisplayField('register_id');
        $this->setPrimaryKey('register_id');
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
            ->scalar('register_status')
            ->requirePresence('register_status', 'create')
            ->notEmptyString('register_status');

        $validator
            ->integer('daily_initial_cashes')
            ->allowEmptyString('daily_initial_cashes');

        $validator
            ->integer('daily_final_cashes')
            ->allowEmptyString('daily_final_cashes');

        $validator
            ->date('register_dates')
            ->allowEmptyDate('register_dates');

        return $validator;
    }
}
