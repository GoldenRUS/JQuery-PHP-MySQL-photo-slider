function removeItem(id)
{
    $.post("galleryController.php", {action: "delete", id: id}).done(function(){location.reload();});
}
function saveItem(id)
{
    $id = id;
    $.post("galleryController.php", {action: "save", id: $id, path: $("#"+$id).val()}).done(function(){location.reload();});
}