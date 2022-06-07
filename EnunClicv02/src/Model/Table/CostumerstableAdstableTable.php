<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CostumerstableAdstable Model
 *
 * @property \App\Model\Table\CostumerstableTable&\Cake\ORM\Association\BelongsTo $Costumerstable
 * @property \App\Model\Table\AdstableTable&\Cake\ORM\Association\BelongsTo $Adstable
 *
 * @method \App\Model\Entity\CostumerstableAdstable newEmptyEntity()
 * @method \App\Model\Entity\CostumerstableAdstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CostumerstableAdstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CostumerstableAdstableTable extends Table
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

        $this->setTable('costumerstable_adstable');

        $this->belongsTo('Costumerstable', [
            'foreignKey' => 'costumerstable_costumer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Adstable', [
            'foreignKey' => 'adstable_ads_id',
            'joinType' => 'INNER',
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
            ->integer('costumerstable_costumer_id')
            ->requirePresence('costumerstable_costumer_id', 'create')
            ->notEmptyString('costumerstable_costumer_id');

        $validator
            ->integer('adstable_ads_id')
            ->requirePresence('adstable_ads_id', 'create')
            ->notEmptyString('adstable_ads_id');

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
        $rules->add($rules->existsIn('costumerstable_costumer_id', 'Costumerstable'), ['errorField' => 'costumerstable_costumer_id']);
        $rules->add($rules->existsIn('adstable_ads_id', 'Adstable'), ['errorField' => 'adstable_ads_id']);

        return $rules;
    }
}
