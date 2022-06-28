<?php
include("includes/functions/model.class.php");
$user = new properties;
$data = $user->all();

?>

<table class="table ">
<thead class=" table-dark">
    <tr>
        <th scope="col">Property ID</th>
        <th scope="col">Prop. Type</th>
        <th scope="col">Area</th>
        <th scope="col">Price</th>
        <th scope="col">Location</th>
        <th scope="col">Class</th>
        <th scope="col">Approved</th>
        <th scope="col">Delivery Type</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    <?php
            for($i =0; $i<count($data);$i++){
            ?>
            <tr>
                <th scope="row"><?php echo$data[$i]['id']?></th>
                <td><?php echo$data[$i]['prop_type']?></td>
                <td><?php echo$data[$i]['area']?></td>
                <td><?php echo number_format( $data[$i]['price'] );?></td>
                <td><?php echo$data[$i]['location']?></td>
                <td><?php echo$data[$i]['class']?></td>
                <td><?php if($data[$i]['approved'] == 0){  echo"Susbended";}elseif($data[$i]['approved'] == 1){ echo"Approved";}elseif($data[$i]['approved'] == 2){ echo"Denied";}?></td>
                <td><?php echo$data[$i]['delivery_type']?></td>
                <td>
                <a href="edit_prop.php?id=<?php echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <br>
                <br>
                <a href="includes/functions/delete_prop.php?id=<?php echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <?php
            }?>
</tbody>
</table>

<?php
            // for($i =0; $i<count($data);$i++){
            // ?>
            <!-- <tr>
                <th scope="row"><?php echo$data[$i]['id']?></th>
                <td><?php //echo$data[$i]['prop_type']?></td>
                <td><?php //echo$data[$i]['area']?></td>
                <td><?php //echo number_format( $data[$i]['price'] );?></td>
                <td><?php //echo$data[$i]['location']?></td>
                <td><?php //echo$data[$i]['class']?></td>
                <td><?php //if($data[$i]['availbilty'] == 0){  echo"Available";}else{ echo"Not Available";}?></td>
                <td><?php //echo$data[$i]['delivery_type']?></td>
                <td>
                <a href="edit.php?id=<?php //echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <br>
                <br>
                <a href="includes/functions/delete.php?id=<?php // echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr> -->
            <?php
            // }?>