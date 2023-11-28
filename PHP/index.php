<?php 
function display_image_list($imageList)
{
  foreach ($imageList as $item)
  {
    echo "< img src = 'images/$item' width = 50em height = 50em alt='$item'>";

  }
}
