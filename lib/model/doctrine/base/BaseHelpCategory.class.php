<?php

/**
 * BaseHelpCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $help_id
 * @property integer $category_id
 * @property Help $Help
 * @property Category $Category
 * 
 * @method integer      getHelpId()      Returns the current record's "help_id" value
 * @method integer      getCategoryId()  Returns the current record's "category_id" value
 * @method Help         getHelp()        Returns the current record's "Help" value
 * @method Category     getCategory()    Returns the current record's "Category" value
 * @method HelpCategory setHelpId()      Sets the current record's "help_id" value
 * @method HelpCategory setCategoryId()  Sets the current record's "category_id" value
 * @method HelpCategory setHelp()        Sets the current record's "Help" value
 * @method HelpCategory setCategory()    Sets the current record's "Category" value
 * 
 * @package    Tree-of-Life
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHelpCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('help_category');
        $this->hasColumn('help_id', 'integer', null, array(
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
        $this->hasOne('Help', array(
             'local' => 'help_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}