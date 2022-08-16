<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table = 'tbl_subcategories';
    
    protected $primaryKey = 'subcategory_id';

    protected $allowedFields = ['subcategory_name', 'category', 'is_deleted'];

    public function getSubCategories($subcategory_id = false)
    {
        if ($subcategory_id === false) {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['subcategory_id' => $subcategory_id])
                    ->first();
    }
}