<?php
require_once("galleryCore.php");
require_once("galleryView.php");


if(isset($_POST['action']))
{
    if($_POST['action'] == 'delete')
    {
        DelGalleryItem(new galleryItem($_POST['id'], $_POST['filename'], ""));
    }
    else if($_POST['action'] == 'add')
    {
        AddGalleryItem(new galleryItem("", $_POST['filename'], "#"));
    }
    else if($_POST['action'] == 'get')
    {
        ShowGallery(GetGallery());
    }
    if($_POST['action'] == 'save')
    {
        SaveItem(new galleryItem($_POST['id'], "", $_POST['path']));
    }
}
?>