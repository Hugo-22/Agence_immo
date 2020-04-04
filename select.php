$sql_type = "SELECT * FROM type_logement";
$req_type = $bdd->query($sql_type);
<select name='select_type' class='form-control custom-select w-25' required> 
while ($row_type = $req_type->fetch()) {
    echo "<option value='".$row_type['id']."'>".$row_type['type']." </option> ";
}
</select>