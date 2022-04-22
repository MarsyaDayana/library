<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newspapers Model
 *
 * @property \App\Model\Table\PubsTable&\Cake\ORM\Association\BelongsTo $Pubs
 *
 * @method \App\Model\Entity\Newspaper newEmptyEntity()
 * @method \App\Model\Entity\Newspaper newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newspaper findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Newspaper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newspaper|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newspaper saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewspapersTable extends Table
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

        $this->setTable('newspapers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Publishers', [
            'foreignKey' => 'pub_id',
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
            ->scalar('Language')
            ->maxLength('Language', 40)
            ->allowEmptyString('Language');

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

        $validator
            ->scalar('Type')
            ->maxLength('Type', 40)
            ->allowEmptyString('Type');

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
        $rules->add($rules->existsIn('pub_id', 'Pubs'), ['errorField' => 'pub_id']);

        return $rules;
    }
}
