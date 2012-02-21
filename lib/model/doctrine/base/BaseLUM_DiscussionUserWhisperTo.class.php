<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_DiscussionUserWhisperTo', 'doctrine');

/**
 * BaseLUM_DiscussionUserWhisperTo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $discussionid
 * @property integer $whispertouserid
 * @property integer $lastuserid
 * @property integer $countwhispers
 * @property timestamp $datelastactive
 * 
 * @method integer                     getDiscussionid()    Returns the current record's "discussionid" value
 * @method integer                     getWhispertouserid() Returns the current record's "whispertouserid" value
 * @method integer                     getLastuserid()      Returns the current record's "lastuserid" value
 * @method integer                     getCountwhispers()   Returns the current record's "countwhispers" value
 * @method timestamp                   getDatelastactive()  Returns the current record's "datelastactive" value
 * @method LUM_DiscussionUserWhisperTo setDiscussionid()    Sets the current record's "discussionid" value
 * @method LUM_DiscussionUserWhisperTo setWhispertouserid() Sets the current record's "whispertouserid" value
 * @method LUM_DiscussionUserWhisperTo setLastuserid()      Sets the current record's "lastuserid" value
 * @method LUM_DiscussionUserWhisperTo setCountwhispers()   Sets the current record's "countwhispers" value
 * @method LUM_DiscussionUserWhisperTo setDatelastactive()  Sets the current record's "datelastactive" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_DiscussionUserWhisperTo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_DiscussionUserWhisperTo');
        $this->hasColumn('discussionid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('whispertouserid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('lastuserid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('countwhispers', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('datelastactive', 'timestamp', 25, array(
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