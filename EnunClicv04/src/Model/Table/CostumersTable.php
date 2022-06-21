<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Costumers Model
 *
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\BelongsTo $Payments
 *
 * @method \App\Model\Entity\Costumer newEmptyEntity()
 * @method \App\Model\Entity\Costumer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Costumer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Costumer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Costumer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Costumer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Costumer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Costumer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Costumer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Costumer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Costumer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CostumersTable extends Table
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

        $this->setTable('costumers');
        $this->setDisplayField('costumer_id');
        $this->setPrimaryKey('costumer_id');

        $this->belongsTo('Payments', [
            'foreignKey' => 'payments_id',
        ]);
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

        $validator
            ->integer('payments_id')
            ->allowEmptyString('payments_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('payments_id', 'Payments'), ['errorField' => 'payments_id']);

        return $rules;
    }
}
