<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Issueds Model
 *
 * @property \App\Model\Table\BorrowsTable&\Cake\ORM\Association\BelongsTo $Borrows
 *
 * @method \App\Model\Entity\Issued newEmptyEntity()
 * @method \App\Model\Entity\Issued newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Issued[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Issued get($primaryKey, $options = [])
 * @method \App\Model\Entity\Issued findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Issued patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Issued[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Issued|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Issued saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IssuedsTable extends Table
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

        $this->setTable('issueds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Borrows', [
            'foreignKey' => 'borrow_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->decimal('fine')
            ->requirePresence('fine', 'create')
            ->notEmptyString('fine');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn('borrow_id', 'Borrows'), ['errorField' => 'borrow_id']);

        return $rules;
    }
}
