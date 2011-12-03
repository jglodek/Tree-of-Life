<?php

/**
 * BaseNeed
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property Doctrine_Collection $Category
 * @property Doctrine_Collection $NeedCategory
 * 
 * @method string              getName()         Returns the current record's "name" value
 * @method string              getDescription()  Returns the current record's "description" value
 * @method Doctrine_Collection getCategory()     Returns the current record's "Category" collection
 * @method Doctrine_Collection getNeedCategory() Returns the current record's "NeedCategory" collection
 * @method Need                setName()         Sets the current record's "name" value
 * @method Need                setDescription()  Sets the current record's "description" value
 * @method Need                setCategory()     Sets the current record's "Category" collection
 * @method Need                setNeedCategory() Sets the current record's "NeedCategory" collection
 * 
 * @package    Tree-of-Life
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNeed extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('need');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Category', array(
             'refClass' => 'NeedCategory',
             'local' => 'need_id',
             'foreign' => 'category_id'));

        $this->hasMany('NeedCategory', array(
             'local' => 'id',
             'foreign' => 'need_id'));
    }
}