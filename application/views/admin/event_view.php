<div class="breadCrumb clearfix">
    <ul id="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><a href="/index.php/event/">Список мероприятий</a></li>
        <li>Просмотр всех мероприятий</li>
    </ul>
</div>

<div class="content">
    <div class="row-fluid">
        <a href="/index.php/event/add_event/">
            <button type="button" class="btn btn-large btn-block btn-primary">Добавить мероприятие</button>
        </a>
<div class="widget">
    <div class="head">
        <div class="icon"><span class="icosg-target1"></span></div>
        <h2>Таблица мероприятий</h2>
    </div>
    <div class="block-fluid">


        <table class="fpTable" cellpadding="0" cellspacing="0" width="100%">
            <thead>
            <tr>

                <th width="25%">Название мероприятия</th>
                <th width="20%">Место проведения</th>
                <th width="7%">Длительность программы</th>
                <th width="20%">Дата проведения</th>
                <th width="20%">Заказчик</th>
                <th width="20%">Телефон</th>
                <th width="20%">Статус</th>
                <th width="20%">Действия</th>

            </tr>
            </thead>
            <tbody>
            <tr>
<? foreach($all_event as $val): ?>
                <td><a href="#"><? echo $val["title"]; ?></a></td>
                <td><a href="#"><? echo $val["name_mesto"]; ?></a></td>
                <td><a href="#"><? echo $val["time"]; ?> минут</a></td>
                <td><? echo date("d/m/Y",strtotime($val["date"])); ?></td>
                <td><? echo $val["name"]; ?></td>
                <td><? echo $val["phone"]; ?></td>
                <td><a href="#"><span class="label label-important">New</span></a></td>

                <td class="TAC">
                    <a href="#"><span class="icon-ok"></span></a>
                    <a href="/index.php/add_event/<? echo $val["id"]; ?>"><span class="icon-pencil"></span></a>
                    <a href="#"><span class="icon-trash"></span></a>
                </td>
            </tr>
<? endforeach; ?>

            </tbody>
        </table>
    </div>
</div>    </div>
</div>

