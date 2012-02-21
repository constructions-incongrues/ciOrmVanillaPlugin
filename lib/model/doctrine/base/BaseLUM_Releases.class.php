<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_Releases', 'doctrine');

/**
 * BaseLUM_Releases
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $discussionid
 * @property string $labelname
 * @property string $downloadlink
 * @property string $ismix
 * @property Doctrine_Collection $LUM_Discussion
 * 
 * @method integer             getDiscussionid()   Returns the current record's "discussionid" value
 * @method string              getLabelname()      Returns the current record's "labelname" value
 * @method string              getDownloadlink()   Returns the current record's "downloadlink" value
 * @method string              getIsmix()          Returns the current record's "ismix" value
 * @method Doctrine_Collection getLUMDiscussion()  Returns the current record's "LUM_Discussion" collection
 * @method LUM_Releases        setDiscussionid()   Sets the current record's "discussionid" value
 * @method LUM_Releases        setLabelname()      Sets the current record's "labelname" value
 * @method LUM_Releases        setDownloadlink()   Sets the current record's "downloadlink" value
 * @method LUM_Releases        setIsmix()          Sets the current record's "ismix" value
 * @method LUM_Releases        setLUMDiscussion()  Sets the current record's "LUM_Discussion" collection
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_Releases extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_Releases');
        $this->hasColumn('discussionid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('labelname', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('downloadlink', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('ismix', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('LUM_Discussion', array(
             'local' => 'discussionid',
             'foreign' => 'discussionid'));
    }
}