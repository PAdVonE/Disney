<div class="content">
    <div class="row-fluid">

        <div class="span12">                

            <div class="widget">
                <div class="head dark">
                    <div class="icon"><i class="icos-pencil2"></i></div>
                    <h2>Добавление нового пользователя</h2>
                </div>  
                <form action="<?php echo base_url(); ?>index.php/user/add_user" name="adduser" method="POST" enctype="multipart/form-data">
                    <div class="block-fluid">
                        <div class="row-form">
                            <div class="span2">Логин</div>
                            <div class="span10"><input type="text" name="login" placeholder="Логин"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">Пароль</div>
                            <div class="span10"><input type="password" name="password" value="inputpassword"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">ФИО</div>
                            <div class="span10"><input type="text" name="fio" placeholder="ФИО"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">Телефон</div>
                            <div class="span10"><input type="text" name="phone" placeholder="Телефон"></div>
                        </div>
                        <div class="row-form">
                            <div class="span2">Фото:</div>
                            <div class="span10"><input type="file" name="userfile" placeholder="Фото"></div>
                        </div>
                        <div class="toolbar bottom TAL">
                            <input type="submit" class="btn btn-primary" name="add"value="Добавить">
                        </div>
                    </div>
                </form>
            </div>

        </div>



    </div>
</div>