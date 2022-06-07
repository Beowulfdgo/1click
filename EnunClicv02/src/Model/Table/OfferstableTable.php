<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offerstable Model
 *
 * @method \App\Model\Entity\Offerstable newEmptyEntity()
 * @method \App\Model\Entity\Offerstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Offerstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offerstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offerstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Offerstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offerstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offerstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offerstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offerstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offerstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offerstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offerstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OfferstableTable extends Table
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

        $this->setTable('offerstable');
        $this->setDisplayField('offers_id');
        $this->setPrimaryKey('offers_id');
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
            ->scalar('offer_names')
            ->allowEmptyString('offer_names');

        $validator
            ->scalar('offer_descriptions')
            ->allowEmptyString('offer_descriptions');

        $validator
            ->date('offer_start_dates')
            ->allowEmptyDate('offer_start_dates');

        $validator
            ->date('offer_final_dates')
            ->allowEmptyDate('offer_final_dates');

        $validator
            ->integer('offer_prices')
            ->allowEmptyString('offer_prices');

        return $validator;
    }
}
