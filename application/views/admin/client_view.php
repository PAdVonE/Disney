<div class="content">
    <div class="row-fluid">
        <a href="<?php echo base_url(); ?>index.php/client/add_client">
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
                            <th><input type="checkbox" class="checkall"/></th>
                            <th width="25%">ФИО</th>
                            <th width="20%">Тип пользователя</th>
                            <th width="20%">Статус</th>
                            <th width="20%">Телефон</th>
                            <th width="15%" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="order[]" value="528"/></td>
                            <td><a href="#">Dmitry Ivaniuk</a></td>
                            <td>Product #212</td>
                            <td><span class="label label-important">Занят</span></td>
                            <td>24/11/2012</td>
                            <td class="TAC">
                                <a href="#"><span class="icon-ok"></span></a> 
                                <a href="#"><span class="icon-pencil"></span></a> 
                                <a href="#"><span class="icon-trash"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="order[]" value="525"/></td>
                            <td><a href="#">Olga Yukhimchuk</a></td>
                            <td>Product #874</td>
                            <td><span class="label label-info">Свободен</span></td>
                            <td>23/11/2012</td>
                            <td class="TAC">
                                <a href="#"><span class="icon-ok"></span></a> 
                                <a href="#"><span class="icon-pencil"></span></a> 
                                <a href="#"><span class="icon-trash"></span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>                    
            </div> 
        </div>            




    </div>
</div>