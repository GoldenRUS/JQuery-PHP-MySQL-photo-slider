<?php
class galleryItem
{
    public $id;
    public $filename;
    public $path;
    function __construct($id, $filename, $path)
    {
        $this->id = $id;
        $this->filename = $filename;
        $this->path = $path;
    }
}

function AddGalleryItem($file)
{
    $sql = mysqli_connect("localhost","user","password","database");
    mysqli_query($sql, "INSERT INTO gallery(filename, path) VALUES ('$file', ' ');");
}

function DelGalleryItem($galleryItem)
{
    $sql = mysqli_connect("localhost","user","password","database");
    mysqli_query($sql, "DELETE FROM gallery WHERE id='$galleryItem->id';");
    unlink($galleryItem->filename);
}

function GetGallery()
{
    $sql = mysqli_connect("localhost","user","password","database");
    $items = array();
    $query = mysqli_query($sql, "SELECT * FROM gallery WHERE 1=1");
    while($row = mysqli_fetch_array($query))
    {
        $items[] = new galleryItem($row["id"], $row["filename"], $row["path"]);
    }
    return $items;
}

function SaveItem($galleryItem)
{
    $sql = mysqli_connect("localhost","user","password","database");
    mysqli_query($sql, "UPDATE gallery SET path = '$galleryItem->path' WHERE id='$galleryItem->id';");
}
?>