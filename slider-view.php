<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>


<style>
    .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 960px;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
  </style>

<ul class="rslides">
<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once("./admin/galleryCore.php");
$items = GetGallery();
foreach($items as $item)
{
  if($item->path != " ")
  {
    echo '<li><a href="' .$item->path. '"><img src="'.$item->filename.'"></a></li>';
  }
  else
  {
    echo '<li><img src="'.$item->filename.'"></li>';
  }
}
?>
</ul>