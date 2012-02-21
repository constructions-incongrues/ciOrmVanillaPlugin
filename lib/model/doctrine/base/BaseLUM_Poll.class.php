<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_Poll', 'doctrine');

/**
 * BaseLUM_Poll
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pollid
 * @property integer $discussionid
 * @property integer $userid
 * @property string $name
 * @property timestamp $datecreated
 * @property timestamp $datestart
 * @property timestamp $dateend
 * @property integer $totalvotes
 * @property integer $priority
 * 
 * @method integer   getPollid()       Returns the current record's "pollid" value
 * @method integer   getDiscussionid() Returns the current record's "discussionid" value
 * @method integer   getUserid()       Returns the current record's "userid" value
 * @method string    getName()         Returns the current record's "name" value
 * @method timestamp getDatecreated()  Returns the current record's "datecreated" value
 * @method timestamp getDatestart()    Returns the current record's "datestart" value
 * @method timestamp getDateend()      Returns the current record's "dateend" value
 * @method integer   getTotalvotes()   Returns the current record's "totalvotes" value
 * @method integer   getPriority()     Returns the current record's "priority" value
 * @method LUM_Poll  setPollid()       Sets the current record's "pollid" value
 * @method LUM_Poll  setDiscussionid() Sets the current record's "discussionid" value
 * @method LUM_Poll  setUserid()       Sets the current record's "userid" value
 * @method LUM_Poll  setName()         Sets the current record's "name" value
 * @method LUM_Poll  setDatecreated()  Sets the current record's "datecreated" value
 * @method LUM_Poll  setDatestart()    Sets the current record's "datestart" value
 * @method LUM_Poll  setDateend()      Sets the current record's "dateend" value
 * @method LUM_Poll  setTotalvotes()   Sets the current record's "totalvotes" value
 * @method LUM_Poll  setPriority()     Sets the current record's "priority" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_Poll extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_Poll');
        $this->hasColumn('pollid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('discussionid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('userid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('datecreated', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('datestart', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('dateend', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('totalvotes', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}