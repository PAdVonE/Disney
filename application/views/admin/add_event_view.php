<div class="breadCrumb clearfix">
    <ul id="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><a href="/index.php/event/">Список мероприятий</a></li>
        <li>Добавление нового мероприятия</li>
    </ul>
</div>
<div class="content">
    <div class="row-fluid">

        <div class="span12">

            <div class="widget">
                <div class="head dark">
                    <div class="icon"><i class="icos-pencil2"></i></div>
                    <h2>Добавление нового пользователя</h2>
                </div>
                <form name="addus" method="POST">
                </form>
                <form action="/index.php/user/add_user" name="adduser" method="POST">
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
                            <div class="span2">Select2 multiple:</div>
                            <div class="span10">
                                <select name="s_example" multiple="multiple" class="select" style="width: 100%;">
                                    <option value="0">choose a option...</option>
                                    <option value="1">Andorra</option>
                                    <option value="2">Antarctica</option>
                                    <option value="3">Bulgaria</option>
                                    <option value="4">Germany</option>
                                    <option value="5">Dominican Republic</option>
                                    <option value="6">Micronesia</option>
                                    <option value="7">United Kingdom</option>
                                    <option value="8">Greece</option>
                                    <option value="9">Italy</option>
                                    <option value="10">Ukraine</option>
                                </select>
                            </div>
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