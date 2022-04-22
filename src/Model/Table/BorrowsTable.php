<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Borrows Model
 *
 * @property \App\Model\Table\BooksTable&\Cake\ORM\Association\BelongsTo $Books
 * @property \App\Model\Table\MagazinesTable&\Cake\ORM\Association\BelongsTo $Magazines
 * @property \App\Model\Table\NewspapersTable&\Cake\ORM\Association\BelongsTo $Newspapers
 *
 * @method \App\Model\Entity\Borrow newEmptyEntity()
 * @method \App\Model\Entity\Borrow newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Borrow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Borrow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Borrow findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Borrow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Borrow[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Borrow|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Borrow saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Borrow[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Borrow[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Borrow[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Borrow[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BorrowsTable extends Table
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

        $this->setTable('borrows');
        $this->setDisplayField('borrow_id');
        $this->setPrimaryKey('borrow_id');

        $this->belongsTo('Books', [
            'foreignKey' => 'book_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Magazines', [
            'foreignKey' => 'magazine_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Newspapers', [
            'foreignKey' => 'newspaper_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
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
            ->integer('borrow_id')
            ->allowEmptyString('borrow_id', null, 'create');

        $validator
            ->dateTime('borrow_date')
            ->requirePresence('borrow_date', 'create')
            ->notEmptyDateTime('borrow_date');

        $validator
            ->dateTime('return_date')
            ->requirePresence('return_date', 'create')
            ->notEmptyDateTime('return_date');

        $validator
            ->scalar('status')
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
        $rules->add($rules->existsIn('book_id', 'Books'), ['errorField' => 'book_id']);
        $rules->add($rules->existsIn('magazine_id', 'Magazines'), ['errorField' => 'magazine_id']);
        $rules->add($rules->existsIn('newspaper_id', 'Newspapers'), ['errorField' => 'newspaper_id']);
        $rules->add($rules->existsIn('member_id', 'Members'), ['errorField' => 'member_id']);

        return $rules;
    }
}
