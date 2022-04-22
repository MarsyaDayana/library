<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Magazines Model
 *
 * @property \App\Model\Table\PubsTable&\Cake\ORM\Association\BelongsTo $Pubs
 *
 * @method \App\Model\Entity\Magazine newEmptyEntity()
 * @method \App\Model\Entity\Magazine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Magazine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Magazine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Magazine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Magazine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magazine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magazine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MagazinesTable extends Table
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

        $this->setTable('magazines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Publishers', [
            'foreignKey' => 'pub_id',
            'class_name' => 'Publishers'
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Type')
            ->maxLength('Type', 40)
            ->allowEmptyString('Type');

        $validator
            ->scalar('Name')
            ->maxLength('Name', 100)
            ->allowEmptyString('Name');

        $validator
            ->date('Date_Of_Receipt')
            ->allowEmptyDate('Date_Of_Receipt');

        $validator
            ->date('Date_Published')
            ->allowEmptyDate('Date_Published');

        $validator
            ->integer('Pages')
            ->allowEmptyString('Pages');

        $validator
            ->decimal('Price')
            ->allowEmptyString('Price');

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
        $rules->add($rules->existsIn('pub_id', 'Publishers'), ['errorField' => 'pub_id']);

        return $rules;
    }
}
