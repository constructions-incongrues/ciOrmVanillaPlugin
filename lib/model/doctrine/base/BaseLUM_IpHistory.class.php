<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_IpHistory', 'doctrine');

/**
 * BaseLUM_IpHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $iphistoryid
 * @property string $remoteip
 * @property integer $userid
 * @property timestamp $datelogged
 * 
 * @method integer       getIphistoryid() Returns the current record's "iphistoryid" value
 * @method string        getRemoteip()    Returns the current record's "remoteip" value
 * @method integer       getUserid()      Returns the current record's "userid" value
 * @method timestamp     getDatelogged()  Returns the current record's "datelogged" value
 * @method LUM_IpHistory setIphistoryid() Sets the current record's "iphistoryid" value
 * @method LUM_IpHistory setRemoteip()    Sets the current record's "remoteip" value
 * @method LUM_IpHistory setUserid()      Sets the current record's "userid" value
 * @method LUM_IpHistory setDatelogged()  Sets the current record's "datelogged" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_IpHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_IpHistory');
        $this->hasColumn('iphistoryid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('remoteip', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 30,
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
        $this->hasColumn('datelogged', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}