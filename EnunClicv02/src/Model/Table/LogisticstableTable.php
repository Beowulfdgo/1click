<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logisticstable Model
 *
 * @method \App\Model\Entity\Logisticstable newEmptyEntity()
 * @method \App\Model\Entity\Logisticstable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Logisticstable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logisticstable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logisticstable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Logisticstable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logisticstable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logisticstable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logisticstable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logisticstable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Logisticstable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Logisticstable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Logisticstable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LogisticstableTable extends Table
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

        $this->setTable('logisticstable');
        $this->setDisplayField('logistics_id');
        $this->setPrimaryKey('logistics_id');
    }
}
