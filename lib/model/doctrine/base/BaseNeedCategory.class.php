<?php

/**
 * BaseNeedCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $need_id
 * @property integer $category_id
 * @property Need $Need
 * @property Category $Category
 * 
 * @method integer      getNeedId()      Returns the current record's "need_id" value
 * @method integer      getCategoryId()  Returns the current record's "category_id" value
 * @method Need         getNeed()        Returns the current record's "Need" value
 * @method Category     getCategory()    Returns the current record's "Category" value
 * @method NeedCategory setNeedId()      Sets the current record's "need_id" value
 * @method NeedCategory setCategoryId()  Sets the current record's "category_id" value
 * @method NeedCategory setNeed()        Sets the current record's "Need" value
 * @method NeedCategory setCategory()    Sets the current record's "Category" value
 * 
 * @package    Tree-of-Life
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNeedCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('need_category');
        $this->hasColumn('need_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Need', array(
             'local' => 'need_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}