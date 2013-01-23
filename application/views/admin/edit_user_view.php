<div class="content">
    <div class="row-fluid">

        <div class="span12">                

            <div class="widget">
                <div class="head dark">
                    <div class="icon"><i class="icos-pencil2"></i></div>
                    <h2>Редактирование пользователя</h2>
                    <pre>
                        <?php print_r($get_user); ?>
                    </pre>
                </div>  
                <form action="<?php echo base_url(); ?>index.php/user/update_user/<?php echo $get_user['id']; ?>" name="adduser" method="POST">
                    <div class="block-fluid">
                        <div class="row-form">
                            <div class="span2">Логин</div>
                            <div class="span10"><input type="text" name="login" value="<?php echo $get_user['login']; ?>"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">Пароль</div>
                            <div class="span10"><input type="password" name="password" value="Пароль"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">ФИО</div>
                            <div class="span10"><input type="text" name="fio" value="<?php echo $get_user['fio']; ?>"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">Телефон</div>
                            <div class="span10"><input type="text" name="phone" value="<?php echo $get_user['phone']; ?>"></div>
                        </div>
                        <div class="toolbar bottom TAL">
                            <input type="submit" class="btn btn-primary" name="add" value="Изменить">
                        </div>
                    </div>
                </form>
            </div>

        </div>



    </div>
</div>