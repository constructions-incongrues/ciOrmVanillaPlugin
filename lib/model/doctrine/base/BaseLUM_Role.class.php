<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LUM_Role', 'doctrine');

/**
 * BaseLUM_Role
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $roleid
 * @property string $name
 * @property string $icon
 * @property string $description
 * @property enum $active
 * @property enum $permission_sign_in
 * @property enum $permission_html_allowed
 * @property enum $permission_receive_application_notification
 * @property string $permissions
 * @property integer $priority
 * @property enum $unauthenticated
 * 
 * @method integer  getRoleid()                                      Returns the current record's "roleid" value
 * @method string   getName()                                        Returns the current record's "name" value
 * @method string   getIcon()                                        Returns the current record's "icon" value
 * @method string   getDescription()                                 Returns the current record's "description" value
 * @method enum     getActive()                                      Returns the current record's "active" value
 * @method enum     getPermissionSignIn()                            Returns the current record's "permission_sign_in" value
 * @method enum     getPermissionHtmlAllowed()                       Returns the current record's "permission_html_allowed" value
 * @method enum     getPermissionReceiveApplicationNotification()    Returns the current record's "permission_receive_application_notification" value
 * @method string   getPermissions()                                 Returns the current record's "permissions" value
 * @method integer  getPriority()                                    Returns the current record's "priority" value
 * @method enum     getUnauthenticated()                             Returns the current record's "unauthenticated" value
 * @method LUM_Role setRoleid()                                      Sets the current record's "roleid" value
 * @method LUM_Role setName()                                        Sets the current record's "name" value
 * @method LUM_Role setIcon()                                        Sets the current record's "icon" value
 * @method LUM_Role setDescription()                                 Sets the current record's "description" value
 * @method LUM_Role setActive()                                      Sets the current record's "active" value
 * @method LUM_Role setPermissionSignIn()                            Sets the current record's "permission_sign_in" value
 * @method LUM_Role setPermissionHtmlAllowed()                       Sets the current record's "permission_html_allowed" value
 * @method LUM_Role setPermissionReceiveApplicationNotification()    Sets the current record's "permission_receive_application_notification" value
 * @method LUM_Role setPermissions()                                 Sets the current record's "permissions" value
 * @method LUM_Role setPriority()                                    Sets the current record's "priority" value
 * @method LUM_Role setUnauthenticated()                             Sets the current record's "unauthenticated" value
 * 
 * @package    admin-incongrue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLUM_Role extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('LUM_Role');
        $this->hasColumn('roleid', 'integer', 4, array(
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
        $this->hasColumn('icon', 'string', 155, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 155,
             ));
        $this->hasColumn('description', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('active', 'enum', 1, array(
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
        $this->hasColumn('permission_sign_in', 'enum', 1, array(
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
        $this->hasColumn('permission_html_allowed', 'enum', 1, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => '0',
              1 => '1',
             ),
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('permission_receive_application_notification', 'enum', 1, array(
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
        $this->hasColumn('permissions', 'string', null, array(
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
        $this->hasColumn('unauthenticated', 'enum', 1, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}