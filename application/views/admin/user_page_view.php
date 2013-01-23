<div class="content">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="profile clearfix">
                    <div class="image">
                        <img class="img-polaroid" src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('avatar'); ?>">
                    </div>                        
                    <div class="info">
                        <h2><?php echo $get_user['fio']; ?></h2>
                        <?php if ($get_user['type'] > 0) {
                            $user_type = "Администратор";
                        }
                            else{
                                $user_type = "Пользователь";
                            }
                        ?>
                        <p><strong>Телефон: </strong><?php echo $get_user['phone']; ?></p>
                        <div class="status"><?php echo $user_type; ?></div>
                    </div>
                    <div class="stats">
                        <div class="item">
                            <div class="title">129</div>
                            <div class="descr">Files</div>                                
                        </div>                            
                        <div class="item">
                            <div class="title">38</div>
                            <div class="descr">Stories</div>                                
                        </div>                                                        
                        <div class="item">
                            <div class="title">45</div>
                            <div class="descr">Followers</div>
                        </div>
                        <div class="item">
                            <div class="title">14</div>
                            <div class="descr">Following</div>                                
                        </div>                            
                    </div>
                </div>
            </div>
            
                     
        </div>
        <div class="span8">

            
        </div>
    </div>        
</div>