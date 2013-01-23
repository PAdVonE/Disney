<div class="content">
    <div class="row-fluid">
        <a href="<?php echo base_url(); ?>index.php/user/add_user">
            <button type="button" class="btn btn-large btn-block btn-primary">Добавить пользователя</button>
        </a>
        <div class="widget">
            <div class="head">
                <div class="icon"><i class="icosg-clipboard1"></i></div>
                <h2>Пользователи</h2>                       
            </div>                
            <div class="block-fluid">
                <table class="table" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th width="25%">ФИО</th>
                            <th width="20%">Тип пользователя</th>
                            <th width="20%">Статус</th>
                            <th width="20%">Телефон</th>
                            <th width="15%" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($all_users as $item): ?> 
                            <?php
                            if ($item['type'] > 0) {
                                $item['type'] = "Администратор";
                            } else {
                                $item['type'] = "Пользователь";
                            }
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="<?php echo base_url(); ?>index.php/user/user_page/<?php echo $item['login']; ?>"><?php echo $item['fio']; ?></a></td>
                                <td><?php echo $item['type']; ?></td>
                                <td><span class="label label-important">Занят</span></td>
                                <td><?php echo $item['phone']; ?></td>
                                <td class="TAC">
                                    <a href="<?php echo base_url(); ?>index.php/user/edit_user/<?php echo $item['login']; ?>"><span class="icon-pencil"></span></a> 
                                    <a href="<?php echo base_url(); ?>index.php/user/drop_user/<?php echo $item['id']; ?>"><span class="icon-trash"></span></a>
                                </td>
                            </tr> 
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>                    
            </div> 
        </div>            
    </div>
</div>