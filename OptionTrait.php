<?php
namespace Plugin\Model;

trait OptionTrait {
  public static function getOptionList($id, $cond = []) {
    $list = self::create()->getList($cond);

    $ids = [];
    if (is_array($id)) {
      $ids = $id;
    } else {
      $ids = [$id];
    }


    foreach ($list as &$item) {
      $item['selected'] = in_array($item['id'], $ids);
    }

    return $list;
  }
}
