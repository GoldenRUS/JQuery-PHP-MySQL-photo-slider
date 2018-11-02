<link href="galleryController.css" type="text/css" rel="stylesheet" />
<script src="galleryController.js"></script>

<div class="wrapper">
<?php

require_once("galleryCore.php");
function ShowGallery($items)
{
    foreach($items as $item)
    {
        ?>
        <div class="line">
            <div class="left">
                <img src="<?php echo $item->filename; ?>" />
            </div>
            <div class="middle">
                Ссылка:<input type="text" size="60" id="<?php echo $item->id; ?>" value="<?php echo $item->path; ?>">
            </div>
            <div class="right">
                <a class="remove" href="#" onclick="removeItem(<?php echo $item->id; ?>)">Удалить</a>
                <a class="save" href="#" onclick="saveItem(<?php echo $item->id; ?>)">Сохранить</a>
            </div>
        </div>
        <?php
    }
}
ShowGallery(GetGallery());
?>
</div>