<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Category\CategoryInterface;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Laravel\Facades\Image;


class CategoryRepository implements CategoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function store(array $data, $category_row_id)
    {
        
        $category = new Category();
        
        $category->category_name = $data['category_name'];
        // $category->parent_id = $data['parent_id'];
        $category->parent_id = isset($data['parent_id']) ? $data['parent_id'] : null;
        $category->level = 0;

        if($category->parent_id)
        {
            $parent_cat_info = DB::table('categories')->where('category_row_id', $category->parent_id)->first();

            if ($parent_cat_info)
            {
                 $category->level = $parent_cat_info->level + 1;
            }
        }
        // dd(($data['category_image']));

        if(isset($data['category_image']) && $data['category_image']->isValid())
        {
            $category_image = $data['category_image'];
            $filename       = time().'_'.$category_image->getClientOriginalName();
            // echo $filename;exit();
            $category_image->move(public_path('uploads/category').'/original/', $filename);
            
            $image_resize = Image::read(public_path('uploads/category').'/original/'.$filename);
            $image_resize->resize(300,300, function ($constraint){
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/category').'/thumbnail/'.$filename);
            $category->category_image = $filename;
            
        }
        else {
            $category->category_image = null; 
        }
        // dd($category);

        $category->category_description = $data['long_desc'];
        // $category->category_description = isset($data['long_desc']);
        $category->is_featured = isset($data['is_featured']) && $data['is_featured'] ? 1 : 0;

        $category->save();

        if($category->parent_id)
        {
            if($category->has_child !=1)
            {
                DB::table('categories')->where('category_row_id', $data['parent_id'])->update(['has_child' =>1]);
            }
        }
        
        
        return $category;
    }
}
