<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class orderModel extends Model
{
  use HasFactory;

  public static function selectOrderNum($orderNum)
  {
    $selectNum = DB::select("SELECT * FROM `line_order` WHERE `orderNum` ='$orderNum'");    
    return $selectNum;
    
  }
  public static function insertOrderNum($orderName,$orderPhone,$orderNum,$today)
  {
    
    $insertOrderNum = DB::insert("INSERT INTO `line_order` (`id`, `orderName`, `orderPhone`, `orderNum`, `entryDate`)
    VALUES (NULL, '$orderName', '$orderPhone', '$orderNum', '$today' )");
    return $insertOrderNum;

  }

}