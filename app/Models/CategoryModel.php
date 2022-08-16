<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'tbl_categories';
    
    protected $primaryKey = 'category_id';

    protected $allowedFields = ['category_name', 'is_deleted'];

    public function getCategories($category_id = false)
    {
        if ($category_id == false) {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['category_id' => $category_id])
                    ->first();
    }
}