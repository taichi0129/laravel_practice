<?php

namespace App\Services;

class SearchForm
{
  public static function checkGender($data) {
    if($data->gender === 0){
      $gender = '男性';
    }
    if($data->gender === 1){
      $gender = '女性';
    }
    return $gender;
  }

  public static function checkSearch($data) {
    //もしキーワードがあったら
    if($data !== null){
      //全角スペースを半角に
      $search_split = mb_convert_kana($data, 's');

      //空白で区切る
      $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

      //単語をループで回す
      foreach($search_split2 as $value){
          $query->where('your_name', 'like', '%'.$value.'%');
      }
    };
  }
}