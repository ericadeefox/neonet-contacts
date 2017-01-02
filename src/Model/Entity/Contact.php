<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $dbContactNumber
 * @property \Cake\I18n\Time $dbDate
 * @property string $dbLastName
 * @property string $dbFirstName
 * @property string $dbCompany
 * @property string $dbTitle
 * @property string $dbBusinessTitle
 * @property string $dbPrimaryEmail
 * @property string $dbSecondaryEmail
 * @property string $dbWebAddress
 * @property string $dbAddNotes
 * @property string $dbSource
 * @property string $dbCheck
 * @property string $dbMailingLabel
 * @property string $dbPassword
 * @property string $dbSecurityQuestion
 * @property string $dbSecurityAnswer
 * @property string $dbRegistrationComplete
 * @property string $dbHowFind
 * @property string $dbWebLook
 * @property string $dbWantRec
 * @property string $dbWantCom
 * @property string $dbWantRes
 * @property string $dbWhereUse
 * @property string $dbVehicles
 * @property string $dbHowMuch
 * @property string $dbSelfAssembly
 * @property string $dbNeoAssembly
 * @property string $dbOtherComments
 * @property string $dbHowInterest
 * @property string $dbUsr
 * @property string $dbIP
 * @property string $dbPhone
 * @property string $dbAddress
 * @property string $dbCity
 * @property string $dbState
 * @property string $dbCountry
 * @property string $dbZip
 * @property string $dbType
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'dbContactNumber' => false
    ];
}
