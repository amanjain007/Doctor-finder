<html>
<head>
    </head>
<body bgcolor="grey">
    <?php
$select=$_POST["select"];
$select2=$_POST["select2"]; 
  $select3=$_POST["select3"];   
    
if('NOIDA'==$select && 'SECTOR-58'==$select2 && 'dentist'==$select3)
{
    header('Location:den58.html');

}

    if('NOIDA'==$select && 'SECTOR-58'==$select2 && 'ent'==$select3)
{
        header('Location:ent58.html');

}
    if('NOIDA'==$select && 'SECTOR-62'==$select2 && 'dentist'==$select3)
{
        header('Location:doc.html');

}
    if('NOIDA'==$select && 'SECTOR-62'==$select2 && 'ent'==$select3)
{
        header('Location:doc1.html');

}
    if('NOIDA'==$select && 'SECTOR-62'==$select2 && 'homoeopath'==$select3)
{
        header('Location:hmf62.html');

}
    if('NOIDA'==$select && 'SECTOR-63'==$select2 && 'ent'==$select3)
{
        header('Location:ent63.html');

}
    if('NOIDA'==$select && 'SECTOR-63'==$select2 && 'homoeopath'==$select3)
{
        header('Location:hmf63.html');

}
    
    
    
?>
    </body></html>
