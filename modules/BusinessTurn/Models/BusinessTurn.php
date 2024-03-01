<?php

namespace Modules\BusinessTurn\Models;

use App\Models\Tenant\ModelTenant;

class BusinessTurn extends ModelTenant
{
    protected $fillable = [
        'value',
        'name',
        'active',
    ];



    public static function isMajolica()
    {
        $businessTurn = BusinessTurn::where('value', 'majolica')->first();
        if ($businessTurn && $businessTurn->active == 1) {
            return true;
        }
        return false;
    }
    public static function isIntegrateSystem()
    {
        $businessTurn = BusinessTurn::where('value', 'integrate_system')->first();
        if ($businessTurn && $businessTurn->active == 1) {
            return true;
        }
        return false;
    }
    public static function isClothesShoes()
    {
        $businessTurn = BusinessTurn::where('value', 'clothes_shoes')->first();
        if ($businessTurn && $businessTurn->active == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function isFoodDealer()
    {
        $businessTurn = BusinessTurn::where('value', 'food_dealer')->first();
        if ($businessTurn && $businessTurn->active == 1) {
            return true;
        } else {
            return false;
        }
    }
}
