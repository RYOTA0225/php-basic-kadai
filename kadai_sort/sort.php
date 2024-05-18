<!DOCTYPE html>
<htmlS lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
  <?php
  $nums = [15, 4, 18, 23, 10 ];
  function sort_2way ($array, $order) {
   if ($order === TRUE) {
    echo'昇順にソートします'.'</br>';
    array_multisort($array, SORT_ASC, SORT_NUMERIC);
    foreach ($array as $val) {
      print $val.'</br>';
   }
  }
  else {
    echo'降順にソートします'.'</br>';
    array_multisort($array, SORT_DESC, SORT_NUMERIC);
    foreach ($array as $val) {
      print $val.'</br>';
    }
  }
}
  sort_2way($nums, TRUE);
  sort_2way($nums, FALSE);

  ?>
  </p>
</body>
</htmlS