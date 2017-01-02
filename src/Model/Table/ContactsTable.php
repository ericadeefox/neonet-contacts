<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null)
 */
class ContactsTable extends Table
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

        $this->table('contacts');
        $this->displayField('dbContactNumber');
        $this->primaryKey('dbContactNumber');
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
            ->integer('dbContactNumber')
            ->allowEmpty('dbContactNumber', 'create');

        $validator
            ->dateTime('dbDate')
            ->allowEmpty('dbDate');

        $validator
            ->allowEmpty('dbLastName');

        $validator
            ->allowEmpty('dbFirstName');

        $validator
            ->allowEmpty('dbCompany');

        $validator
            ->allowEmpty('dbTitle');

        $validator
            ->allowEmpty('dbBusinessTitle');

        $validator
            ->allowEmpty('dbPrimaryEmail');

        $validator
            ->allowEmpty('dbSecondaryEmail');

        $validator
            ->allowEmpty('dbWebAddress');

        $validator
            ->allowEmpty('dbAddNotes');

        $validator
            ->allowEmpty('dbSource');

        $validator
            ->allowEmpty('dbCheck');

        $validator
            ->allowEmpty('dbMailingLabel');

        $validator
            ->requirePresence('dbPassword', 'create')
            ->notEmpty('dbPassword');

        $validator
            ->requirePresence('dbSecurityQuestion', 'create')
            ->notEmpty('dbSecurityQuestion');

        $validator
            ->requirePresence('dbSecurityAnswer', 'create')
            ->notEmpty('dbSecurityAnswer');

        $validator
            ->allowEmpty('dbRegistrationComplete');

        $validator
            ->allowEmpty('dbHowFind');

        $validator
            ->allowEmpty('dbWebLook');

        $validator
            ->allowEmpty('dbWantRec');

        $validator
            ->allowEmpty('dbWantCom');

        $validator
            ->allowEmpty('dbWantRes');

        $validator
            ->allowEmpty('dbWhereUse');

        $validator
            ->allowEmpty('dbVehicles');

        $validator
            ->allowEmpty('dbHowMuch');

        $validator
            ->allowEmpty('dbSelfAssembly');

        $validator
            ->allowEmpty('dbNeoAssembly');

        $validator
            ->allowEmpty('dbOtherComments');

        $validator
            ->allowEmpty('dbHowInterest');

        $validator
            ->allowEmpty('dbUsr');

        $validator
            ->allowEmpty('dbIP');

        $validator
            ->allowEmpty('dbPhone');

        $validator
            ->allowEmpty('dbAddress');

        $validator
            ->allowEmpty('dbCity');

        $validator
            ->allowEmpty('dbState');

        $validator
            ->allowEmpty('dbCountry');

        $validator
            ->allowEmpty('dbZip');

        $validator
            ->allowEmpty('dbType');

        return $validator;
    }
}
