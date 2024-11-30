<?php
namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;

class MenusCategories extends Model
{
    protected $fillable = ['name'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
