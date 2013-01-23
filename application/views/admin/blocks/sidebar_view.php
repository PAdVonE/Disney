<div class="navigation">

            <ul class="main">
                <li><a href="index.html" class="active"><span class="icom-screen"></span><span class="text">Main</span></a></li>
                <li><a href="#ui"><span class="icom-bookmark"></span><span class="text">UI elements</span></a></li>
                <li><a href="#forms"><span class="icom-pencil3"></span><span class="text">Forms stuff</span></a></li>
                <li><a href="#tables"><span class="icom-newspaper"></span><span class="text">Tables</span></a></li>
                <li><a href="#media"><span class="icom-videos"></span><span class="text">Media & Files</span></a></li>            
                <li><a href="#stats"><span class="icom-stats-up"></span><span class="text">Statistic</span></a></li>
                <li><a href="typography.html"><span class="icom-clipboard1"></span><span class="text">Typography</span></a></li>
                <li><a href="#samples"><span class="icom-box-add"></span><span class="text">Samples</span></a></li>
                <li><a href="#other"><span class="icom-star1"></span><span class="text">Other</span></a></li>
            </ul>
            <div class="control"></div>        
            <div class="submain">
                <div id="default">
                    <div class="widget-fluid userInfo clearfix">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('avatar'); ?>" class="img-polaroid"/>
                        </div>
                        <div class="name"><?php echo $this->session->userdata('fio');  ?></div>
                        <ul class="menuList">
                            <li><a href="#"><span class="icon-cog"></span> Settings</a></li>
                            <li><a href="#"><span class="icon-comment"></span> Messages</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/login/login_out"><span class="icon-share-alt"></span> Logoff</a></li>                        
                        </ul>
                        <div class="text">
                            Welcom back! Your last visit: 24.10.2012 in 19:55
                        </div>
                    </div>                
                    <div class="dr"><span></span></div>
                    <div class="widget">
                        <button class="btn btn-primary btn-block">Button block</button>
                    </div>                
                    <div class="widget">
                        <button class="btn btn-warning btn-block">Some another button</button>
                    </div>
                    <div class="dr"><span></span></div>
                    <div class="menu">
                        <a href="#">Submenu 1</a>
                        <a href="#">Submenu 2</a>
                        <a href="#">Submenu 3</a>
                        <a href="#">Submenu 4</a>
                        <a href="#">Submenu 5</a>
                    </div>
                    <div class="dr"><span></span></div>
                </div>

                <div id="ui">                
                    <div class="menu">
                        <a href="ui.html"><span class="icon-user"></span> Interface</a>
                        <a href="buttons.html"><span class="icon-chevron-right"></span> Buttons set</a>
                        <a href="widgets.html"><span class="icon-th-large"></span> Widgets</a>                    
                        <a href="icons.html"><span class="icon-fire"></span> Icons</a>
                        <a href="grid.html"><span class="icon-th"></span> Grid system</a>
                    </div>                                
                    <div class="dr"><span></span></div>                
                    <div class="widget">
                        <button class="btn btn-primary btn-block">Button block</button>
                    </div>                
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid">
                        <div class="accordion">
                            <h3>Section 1</h3>
                            <div>
                                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
                            </div>
                            <h3>Section 2</h3>
                            <div>
                                <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.</p>
                            </div>
                            <h3>Section 3</h3>
                            <div>
                                <ul>
                                    <li>List item one</li>
                                    <li>List item two</li>
                                    <li>List item three</li>
                                </ul>                                
                                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
                            </div>                            
                        </div>                
                    </div>
                    <div class="dr"><span></span></div>
                    <div class="widget">
                        <span>Default:</span>
                        <div class="progress small progress-info">
                            <div class="bar tip" style="width: 30%;" data-original-title="30%"></div>
                        </div>                                
                        <span>Success:</span>
                        <div class="progress small progress-success">
                            <div class="bar tip" style="width: 50%;" data-original-title="50%"></div>
                        </div>
                        <span>Warning:</span>
                        <div class="progress small progress-warning">
                            <div class="bar tip" style="width: 70%;" data-original-title="70%"></div>
                        </div>       
                        <span>Danger:</span>
                        <div class="progress small progress-danger">
                            <div class="bar tip" style="width: 90%;" data-original-title="90%"></div>
                        </div>                                 
                    </div>
                    <div class="dr"><span></span></div>
                </div>            

                <div id="forms">                                                
                    <div class="menu">
                        <a href="forms.html"><span class="icon-align-justify"></span> Form elements</a>
                        <a href="validation.html"><span class="icon-ok-sign"></span> Form validation</a>
                        <a href="wizard.html"><span class="icon-share"></span> Wizard</a>  
                        <a href="form_grid.html"><span class="icon-th"></span> Form grid system</a>
                        <a href="editor.html"><span class="icon-pencil"></span> Editors</a>
                    </div>                                                                
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid">
                        <div class="row-form">
                            <span>Text:</span>
                            <input type="text" placeholder="Placeholder example"/>
                        </div>
                        <div class="row-form">
                            <input type="checkbox" checked="checked" value="1"/>Checked 
                            <input type="checkbox" value="2"/>Unchecked                         
                        </div>                    
                        <div class="row-form">                        
                            <select>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>                    
                        <div class="row-form">
                            <span>Tags</span>
                            <input class="tags" value="PHP,CSS"/>
                        </div>
                        <div class="row-form">                        
                            <textarea name="text"></textarea>
                        </div>                    
                        <div class="row-form TAR">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="dr"><span></span></div>                
                </div>             

                <div id="tables">

                    <div class="menu">
                        <a href="tables.html"><span class="icon-align-justify"></span> Default tables</a>
                        <a href="dynamic_tables.html"><span class="icon-ok-sign"></span> Dynamic tables</a>                          
                    </div>                                                                
                    <div class="dr"><span></span></div>                
                    <div class="widget-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="30">ID</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>u-231</td>
                                    <td><a href="#">Dmitry Ivaniuk</a></td>
                                </tr>
                                <tr>
                                    <td>u-250</td>
                                    <td><a href="#">Helen Symonchuk</a></td>
                                </tr>
                                <tr>
                                    <td>u-256</td>
                                    <td><a href="#">Olga Yukhimchuk</a></td>
                                </tr>                            
                                <tr>
                                    <td>u-276</td>
                                    <td><a href="#">Valentin Ratushev</a></td>
                                </tr>                                                        
                            </tbody>
                        </table>                    
                    </div>
                    <div class="dr"><span></span></div>                
                    <div class="widget-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checkall"/></th>
                                    <th width="25%">ID</th>
                                    <th width="75%">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="ch[]"/></td>
                                    <td>u-231</td>
                                    <td><a href="#">Dmitry Ivaniuk</a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="ch[]"/></td>
                                    <td>u-250</td>
                                    <td><a href="#">Helen Symonchuk</a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="ch[]"/></td>
                                    <td>u-256</td>
                                    <td><a href="#">Olga Yukhimchuk</a></td>
                                </tr>                            
                                <tr>
                                    <td><input type="checkbox" name="ch[]"/></td>
                                    <td>u-276</td>
                                    <td><a href="#">Valentin Ratushev</a></td>
                                </tr>                                                        
                            </tbody>
                        </table>                    
                    </div>  
                    <div class="dr"><span></span></div>
                </div>  

                <div id="media">

                    <div class="menu">
                        <a href="images.html"><span class="icon-picture"></span> Images</a>
                        <a href="videos.html"><span class="icon-film"></span> Videos</a>
                        <a href="files.html"><span class="icon-file"></span> File handling</a>                                                                             
                    </div>         
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid">
                        <div class="head">File Tree</div>
                        <div id="fileTree"></div>
                    </div>
                    <div class="dr"><span></span></div>
                </div>                          

                <div id="stats">

                    <div class="menu">
                        <a href="chart_line.html"><span class="icon-signal"></span> Lines</a>
                        <a href="chart_pie.html"><span class="icon-adjust"></span> Pie</a>
                        <a href="chart_column.html"><span class="icon-tasks"></span> Columns</a>
                        <a href="chart_widgets.html"><span class="icon-star"></span> Chart widgets</a>                    
                    </div>                
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid TAC">
                        <div class="epc mini">
                            <div class="epcm-green" data-percent="56"><span>45</span>%</div>
                            <div class="label label-success">Server load</div>
                        </div>                    
                        <div class="epc mini">
                            <div class="epcm-orange" data-percent="40"><span>256</span>MB</div>
                            <div class="label label-warning">Used RAM</div>
                        </div>                             
                    </div>
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid">
                        <div class="row-fluid">
                            <div class="span6 TAC">
                                <span class="spl">1:3,2:4,3:3,3:4,4:2</span>
                            </div>
                            <div class="span6 TAC">
                                <span class="spb">5,6,4,6,5,4,5,6,8,5,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-fluid">    
                        <div class="row-fluid">
                            <div class="span6 TAC">
                                <span class="spd">5,6,4,6,5,4,5,6,8,5,6</span>
                            </div>
                            <div class="span6 TAC">
                                <span class="spp">5,2,3,2,1</span>
                            </div>
                        </div>                                        
                    </div>
                    <div class="dr"><span></span></div>
                </div>              

                <div id="samples">
                    <div class="menu">
                        <a href="profile.html"><span class="icon-user"></span> User profile</a>
                        <a href="stream.html"><span class="icon-refresh"></span> Stream activity</a>
                        <a href="mailbox.html"><span class="icon-envelope"></span> Mailbox</a>
                        <a href="invoice.html"><span class="icon-list-alt"></span> Invoice</a>
                        <a href="gallery.html"><span class="icon-picture"></span> Gallery</a>
                        <a href="users.html"><span class="icon-align-justify"></span> Users list</a>
                    </div>                
                    <div class="dr"><span></span></div>
                </div>

                <div id="other">
                    <div class="menu">
                        <a href="login.html"><span class="icon-off"></span> Login page</a>
                        <a href="error_403.html"><span class="icon-warning-sign"></span> Error 403 Forbidden</a>
                        <a href="error_404.html"><span class="icon-warning-sign"></span> Error 404 Not found</a>
                        <a href="error_503.html"><span class="icon-warning-sign"></span> Error 503 Service Unavailable</a>                
                    </div>
                    <div class="dr"><span></span></div>
                    <div class="widget">
                        <div class="alert alert-block">                
                            <strong>Alert block!</strong> Click me!:P
                        </div>
                        <div class="alert alert-error">            
                            <strong>Oh snap!</strong> Change a few... 
                        </div>
                        <div class="alert alert-success">            
                            <strong>Well done!</strong> Successfully...
                        </div>            
                        <div class="alert alert-info">            
                            <strong>Heads up!</strong> This alert...
                        </div>                  
                    </div>
                </div>            

            </div>

        </div>