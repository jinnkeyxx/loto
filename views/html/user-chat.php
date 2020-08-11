<?php require_once "../../autoload.php";
$get_chat = $db->query("SELECT * FROM `live_chat`");
while($row = @mysqli_fetch_array($get_chat)): ?>
<tr class="msg-mix" msg-id="5f23ca68d7fad9b23a3266fc" data-name="nguyenkhoaf" uid="66388" style="" id="chat">
    <td class="msg stxt">
        <div class="dtxt2"><?= $row['date'];?></div>
        <span class="modtools"></span>
        <b class="nme pn_std"><?= $row['user']; ?></b>: <?= $row['content']; ?>
    </td>
</tr>
<?php endwhile; ?>