<?php

 ?>
 <div class="table100 ver1 m-b-110">
    <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                   
                    <th class="cell100 column1">tài khoản</th>
                    <th class="cell100 column2">mật khẩu</th>
                    <th class="cell100 column3">phone</th>
                    <th class="cell100 column4">ngày tạo</th>
                    <th class="cell100 column5">tiền</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="table100-body js-pscroll ps ps--active-y">
        <table>
            <tbody>
                <?php 
                        $query = $db->query("SELECT * FROM `users` ORDER BY `id` DESC");
                        while($row = mysqli_fetch_array($query)):
                ?>
                <tr class="row100 body">
                    
                    <td class="cell100 column1"><?= $row['user']; ?></td>
                    <td class="cell100 column2"><?= $row['pass']; ?></td>
                    <td class="cell100 column3"><?= $row['phone']; ?></td>
                    <td class="cell100 column4"><?= $row['date']; ?></td>
                    <td class="cell100 column5"><?= $row['sodu']; ?></td>
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