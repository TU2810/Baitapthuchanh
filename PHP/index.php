<?php 
function display_image_list($imageList)
{
  foreach ($imageList as $item)
  {
    echo "< img src = 'images/$item' width = 50em height = 50em alt='$item'>";

  }
}
$item = array ('item1.png','item2.png','item3.png','item4.png',);
display_image_list($items);
?>
<h1>function</h1>
<?php 
$items = array('item5.png' ,'item6.png');
display_image_list($items);
?>