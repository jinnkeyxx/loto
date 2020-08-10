<?php
if($_REQUEST['Search'] == ""){
    include "../views/html/error404.html";
}
else{
    
 ?>
<div class="table100-body js-pscroll ps ps--active-y">
    <table>
        <tbody>
            <?php 
                $text = $_REQUEST['Search'];
                if (preg_match("/[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}/", $text))
		        {
                    
                    $query = $db->query("SELECT * FROM `danhso` WHERE `date` REGEXP '$text' ORDER BY `id` DESC");
			
                }
                else if(preg_match("/^[a-z0-9_!@#$%&^()_\[\]=\\',;\/~`-]+$/i", $text)){
                    $query = $db->query("SELECT * FROM `danhso` WHERE `user` REGEXP '$text' ORDER BY `id` DESC");
                }
                else if(preg_match("/[1-9]/", $text)){
                    $query = $db->query("SELECT * FROM `danhso` WHERE `sodanh` REGEXP '$text' ORDER BY `id` DESC");
                }
                else {
                    $query = $db->query("SELECT * FROM `danhso` WHERE `user` REGEXP '$text' ORDER BY `id` DESC");
                }
                        
                while($row = mysqli_fetch_array($query)):
                ?>
            <tr class="row100 body">
                <td class="cell100 column1"><?= $row['id'] ?></td>
                <td class="cell100 column2"><?= $row['user']; ?></td>
                <td class="cell100 column3"><?= $row['sodanh']; ?></td>
                <td class="cell100 column4"><?= $row['kieudanh']; ?></td>
                <td class="cell100 column5"><?= $row['tiendanh']; ?></td>
                <td class="cell100 column6"><?= $row['date']; ?></td>
            </tr>

            <?php endwhile; ?>

        </tbody>
    </table>
    <div class="ps__rail-x" style="left: 0px; bottom: -581px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 581px; height: 585px; right: 5px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 292px; height: 293px;"></div>
    </div>
</div>
<?php } ?>