<?php
namespace Admin\Model;
use Think\Model;

class CategoryModel extends Model {
    //定义相关代码（如字段定义、字段映射、关联模型）
    //字段定义
    protected $fields = array(
        'id',
        'c_name',
        'c_sort',
        'c_goods',
        'c_parent_id',
        '_pk'=>'id',
        '_autoinc'=>true
    );
    //字段映射
    protected $_map = array(
        'id'=>'id',
        'name'=>'c_name',
        'goods'=>'c_goods'
    );
}