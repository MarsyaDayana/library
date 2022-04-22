<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Returns Model
 *
 * @method \App\Model\Entity\Return newEmptyEntity()
 * @method \App\Model\Entity\Return newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Return[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Return get($primaryKey, $options = [])
 * @method \App\Model\Entity\Return findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Return patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Return[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Return|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Return saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Return[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Return[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Return[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Return[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReturnsTable extends Table
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

        $this->setTable('returns');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->nonNegativeInteger('Book_Number')
            ->allowEmptyString('Book_Number');

        $validator
            ->nonNegativeInteger('Book_Title')
            ->allowEmptyString('Book_Title');

        $validator
            ->integer('Issue_Date')
            ->allowEmptyString('Issue_Date');

        $validator
            ->nonNegativeInteger('Due_Date')
            ->allowEmptyString('Due_Date');

        $validator
            ->date('Return_Date')
            ->allowEmptyDate('Return_Date');

        $validator
            ->nonNegativeInteger('Member')
            ->allowEmptyString('Member');

        $validator
            ->nonNegativeInteger('Member_Number')
            ->allowEmptyString('Member_Number');

        $validator
            ->decimal('Fine')
            ->allowEmptyString('Fine');

        $validator
            ->nonNegativeInteger('Status')
            ->allowEmptyString('Status');

        return $validator;
    }
}
