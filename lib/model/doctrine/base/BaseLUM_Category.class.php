<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_Category', 'doctrine');

/**
 * BaseLUM_Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $categoryid
 * @property string $name
 * @property string $description
 * @property integer $priority
 * @property integer $subscribeable
 * 
 * @method integer      getCategoryid()    Returns the current record's "categoryid" value
 * @method string       getName()          Returns the current record's "name" value
 * @method string       getDescription()   Returns the current record's "description" value
 * @method integer      getPriority()      Returns the current record's "priority" value
 * @method integer      getSubscribeable() Returns the current record's "subscribeable" value
 * @method LUM_Category setCategoryid()    Sets the current record's "categoryid" value
 * @method LUM_Category setName()          Sets the current record's "name" value
 * @method LUM_Category setDescription()   Sets the current record's "description" value
 * @method LUM_Category setPriority()      Sets the current record's "priority" value
 * @method LUM_Category setSubscribeable() Sets the current record's "subscribeable" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_Category extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_Category');
        $this->hasColumn('categoryid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
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
        $this->hasColumn('subscribeable', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}