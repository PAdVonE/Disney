<div class="content">

    <div class="row-fluid">

        <div class="span8">

            <div class="middle">

                <div class="button">
                    <a href="#">
                        <span class="icomg-earth"></span>
                        <span class="text">Quick Navigation</span>
                    </a>
                    <ul class="sub">
                        <li><a href="http://aqvatarius.com/" class="tip" title="Dashborad"><span class="icon-home"></span></a></li>
                        <li><a href="ui.html" class="tip" title="UI"><span class="icon-user"></span></a></li>
                        <li><a href="grid.html" class="tip" title="Grid"><span class="icon-th"></span></a></li>
                        <li><a href="widgets.html" class="tip" title="Widgets"><span class="icon-th-large"></span></a></li>
                        <li><a href="buttons.html" class="tip" title="Buttons"><span class="icon-chevron-right"></span></a></li>
                        <li><a href="icons.html" class="tip" title="Icons"><span class="icon-fire"></span></a></li>
                        <li><a href="http://google.com/" class="tip" title="Google" target="_blank"><span class="icon-globe"></span></a></li>
                        <li><a href="http://youtube.com/" class="tip" title="Youtube" target="_blank"><span class="icon-globe"></span></a></li>
                    </ul>
                </div>

                <div class="button">
                    <a href="#">
                        <span class="icomg-user2"></span>
                        <span class="text">Users Actions</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url(); ?>index.php/user" class="tip" title="Список пользователей"><span class="icon-th-list"></span></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/user/add_user" class="tip" title="Добавить пользователь"><span class="icon-plus"></span></a></li>                        
                        <li><a href="#" class="tip" title="Registrations"><span class="icon-ok"></span></a></li>
                        <li><a href="#" class="tip" title="Send mail"><span class="icon-envelope"></span></a></li>
                        <li><a href="#" class="tip" title="Top users"><span class="icon-star"></span></a></li>
                        <li><a href="#" class="tip" title="Users activity"><span class="icon-signal"></span></a></li>
                        <li><a href="#" class="tip" title="Last comments"><span class="icon-comment"></span></a></li>
                    </ul>
                </div>                

                <div class="button">
                    <a href="#">
                        <span class="icomg-videos"></span>
                        <span class="text">Media Actions</span>
                    </a>
                    <ul class="sub">                        
                        <li><a href="#" class="tip" title="Videos"><span class="icon-film"></span></a></li>
                        <li><a href="#" class="tip" title="Images"><span class="icon-picture"></span></a></li>                        
                        <li><a href="#" class="tip" title="Add new"><span class="icon-plus"></span></a></li>                        
                        <li><a href="#" class="tip" title="File manager"><span class="icon-folder-open"></span></a></li>
                    </ul>
                </div>                  

                <div class="button">
                    <a href="#">
                        <span class="icomg-mail"></span>
                        <span class="text">Mail box</span>
                    </a>
                    <ul class="sub">                        
                        <li><a href="#" class="tip" title="New"><span class="icon-envelope"></span></a></li>
                        <li><a href="#" class="tip" title="Inbox"><span class="icon-inbox"></span></a></li>                        
                        <li><a href="#" class="tip" title="Outbox"><span class="icon-share-alt"></span></a></li>                        
                        <li><a href="#" class="tip" title="Spam"><span class="icon-warning-sign"></span></a></li>
                        <li><a href="#" class="tip" title="Removed"><span class="icon-remove"></span></a></li>
                    </ul>                        
                </div>

            </div>                

            <div class="middle">
                <div class="informer">
                    <a href="#">
                        <span class="title">2/1,981</span>
                        <span class="text">Inbox</span>
                    </a>
                    <span class="caption orange tip" title="Spam">341</span>
                </div>                                        
                <div class="informer">
                    <a href="#">
                        <span class="title">$2,534</span>
                        <span class="text">Balance</span>
                    </a>
                    <span class="caption red">-$135</span>
                </div>                    
                <div class="informer">
                    <a href="#">
                        <span class="title">1,001</span>
                        <span class="text">Orders</span>
                    </a>
                    <span class="caption green tip" title="New">4</span>
                </div>                    
                <div class="informer">
                    <a href="<?php echo base_url(); ?>index.php/user">
                        <span class="title"><?php echo $count_users; ?></span>
                        <span class="text">Пользователя</span>
                    </a>
                    <span class="caption purple tip" title="New">10</span>
                </div>                                        
            </div>
            
        </div>

        <div class="span4">

            <div class="block-fluid">
                <div id="main_calendar"></div>
            </div>                

            <div class="middle">
                <div class="epc">
                    <div class="epc-green" data-percent="56"><span>56</span>%</div>
                    <div class="label label-success">Server load</div>
                </div>
                <div class="epc">
                    <div class="epc-orange" data-percent="20"><span>128</span>MB</div>
                    <div class="label label-warning">Used RAM</div>
                </div>                        
                <div class="epc">
                    <div class="epc-red" data-percent="78"><span>481</span>GB</div>
                    <div class="label label-important">Disk</div>
                </div>                                                
            </div>

            <div class="widget">

                <div class="head dark">
                    <div class="icon"><i class="icos-comments1"></i></div>
                    <h2>Last Comments</h2>
                    <ul class="buttons">                                                        
                        <li><a href="#"><span class="icos-calendar"></span></a></li>
                    </ul>                          
                </div>

                <div class="block messages">

                    <div class="item" id="comment_1">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>img/examples/users/dmitry.jpg" class="img-polaroid"/>
                        </div>
                        <div class="date">14:55</div>
                        <div class="text">
                            <a href="#">Dmitry</a>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                        <div class="rating" id="rate_comment_id_1">
                            <a href="#" class="star active tip" title="1"></a>
                            <a href="#" class="star tip" title="2"></a>
                            <a href="#" class="star tip" title="3"></a>
                            <a href="#" class="star tip" title="4"></a>
                            <a href="#" class="star tip" title="5"></a>
                        </div>
                        <div class="actions">                                
                            <a href="#"><span class="icon-share-alt"></span></a>
                            <a href="#"><span class="icon-pencil"></span></a>
                            <a href="#"><span class="icon-remove"></span></a>                                
                        </div>
                    </div>

                    <div class="item" id="comment_4">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>img/examples/users/helen.jpg" class="img-polaroid"/>
                        </div>
                        <div class="date">13:55</div>
                        <div class="text">
                            <a href="#">Helen</a>
                            <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                        <div class="rating" id="rate_comment_id_4">
                            <a href="#" class="star active tip" title="1"></a>
                            <a href="#" class="star active tip" title="2"></a>
                            <a href="#" class="star active tip" title="3"></a>
                            <a href="#" class="star tip" title="4"></a>
                            <a href="#" class="star tip" title="5"></a>
                        </div>                            
                        <div class="actions">                                
                            <a href="#"><span class="icon-share-alt"></span></a>
                            <a href="#"><span class="icon-pencil"></span></a>
                            <a href="#"><span class="icon-remove"></span></a>                                
                        </div>                            
                    </div>                         

                    <div class="item" id="comment_5">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>img/examples/users/alexey.jpg" class="img-polaroid"/>
                        </div>
                        <div class="date">13:50</div>
                        <div class="text">
                            <a href="#">Alex</a>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                        <div class="rating" id="rate_comment_id_5">
                            <a href="#" class="star active tip" title="1"></a>
                            <a href="#" class="star active tip" title="2"></a>
                            <a href="#" class="star active tip" title="3"></a>
                            <a href="#" class="star active tip" title="4"></a>
                            <a href="#" class="star active tip" title="5"></a>
                        </div>                            
                        <div class="actions">                                
                            <a href="#"><span class="icon-share-alt"></span></a>
                            <a href="#"><span class="icon-pencil"></span></a>
                            <a href="#"><span class="icon-remove"></span></a>                                
                        </div>                            
                    </div>                         

                </div>

            </div>                

        </div>            

    </div>

</div>  