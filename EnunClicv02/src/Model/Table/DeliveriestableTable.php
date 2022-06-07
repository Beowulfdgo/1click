<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deliveriestable Model
 *
 * @method \App\Model\Entity\Deliveriestable newEmptyEntity()
 * @method \App\Model\Entity\Deliveriestable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Deliveriestable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deliveriestable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deliveriestable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Deliveriestable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deliveriestable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deliveriestable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deliveriestable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DeliveriestableTable extends Table
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

        $this->setTable('deliveriestable');
        $this->setDisplayField('delivery_man_id');
        $this->setPrimaryKey('delivery_man_id');
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
            ->scalar('delivery_man_names')
            ->allowEmptyString('delivery_man_names');

        $validator
            ->scalar('delivery_man_schedules')
            ->allowEmptyString('delivery_man_schedules');

        $validator
            ->scalar('delivery_man_days')
            ->allowEmptyString('delivery_man_days');

        return $validator;
    }
}
