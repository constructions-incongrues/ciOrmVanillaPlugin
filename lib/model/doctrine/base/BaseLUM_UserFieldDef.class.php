<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_UserFieldDef', 'doctrine');

/**
 * BaseLUM_UserFieldDef
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $userfielddefid
 * @property string $title
 * @property string $type
 * @property enum $status
 * @property integer $priority
 * @property string $defaultvalue
 * @property string $options
 * 
 * @method integer          getUserfielddefid() Returns the current record's "userfielddefid" value
 * @method string           getTitle()          Returns the current record's "title" value
 * @method string           getType()           Returns the current record's "type" value
 * @method enum             getStatus()         Returns the current record's "status" value
 * @method integer          getPriority()       Returns the current record's "priority" value
 * @method string           getDefaultvalue()   Returns the current record's "defaultvalue" value
 * @method string           getOptions()        Returns the current record's "options" value
 * @method LUM_UserFieldDef setUserfielddefid() Sets the current record's "userfielddefid" value
 * @method LUM_UserFieldDef setTitle()          Sets the current record's "title" value
 * @method LUM_UserFieldDef setType()           Sets the current record's "type" value
 * @method LUM_UserFieldDef setStatus()         Sets the current record's "status" value
 * @method LUM_UserFieldDef setPriority()       Sets the current record's "priority" value
 * @method LUM_UserFieldDef setDefaultvalue()   Sets the current record's "defaultvalue" value
 * @method LUM_UserFieldDef setOptions()        Sets the current record's "options" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_UserFieldDef extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_UserFieldDef');
        $this->hasColumn('userfielddefid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('type', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'text',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('status', 'enum', 1, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => '1',
              1 => '0',
             ),
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('priority', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('defaultvalue', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('options', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}