<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Installation Model
 *
 * @method \App\Model\Entity\Installation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Installation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Installation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Installation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Installation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Installation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Installation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Installation findOrCreate($search, callable $callback = null, $options = [])
 */
class InstallationTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('installation');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        return $validator;
    }
}
