<div class="table100 ver1 m-b-110">
    <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100 column1">stt</th>
                    <th class="cell100 column2">user</th>
                    <th class="cell100 column3">so danh</th>
                    <th class="cell100 column4">kieu danh</th>
                    <th class="cell100 column5">tien danh</th>
                    <th class="cell100 column6">time</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="table100-body js-pscroll ps ps--active-y">
        <table>
            <tbody>
                <?php 
                        $query = $db->query("SELECT * FROM `danhso` ORDER BY `id` DESC");
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
</div>