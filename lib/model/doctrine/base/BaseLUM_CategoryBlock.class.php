<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_CategoryBlock', 'doctrine');

/**
 * BaseLUM_CategoryBlock
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $categoryid
 * @property integer $userid
 * @property enum $blocked
 * 
 * @method integer           getCategoryid() Returns the current record's "categoryid" value
 * @method integer           getUserid()     Returns the current record's "userid" value
 * @method enum              getBlocked()    Returns the current record's "blocked" value
 * @method LUM_CategoryBlock setCategoryid() Sets the current record's "categoryid" value
 * @method LUM_CategoryBlock setUserid()     Sets the current record's "userid" value
 * @method LUM_CategoryBlock setBlocked()    Sets the current record's "blocked" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_CategoryBlock extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_CategoryBlock');
        $this->hasColumn('categoryid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('userid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('blocked', 'enum', 1, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => '1',
              1 => '0',
             ),
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}