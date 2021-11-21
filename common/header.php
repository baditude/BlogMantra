
<!-- its a blue bar header -->
        <?php
                $image = "";
                if(file_exists($user_data['profile_image']))
                {
                    $image = $user_data['profile_image'];
                }
                else
                {
                    if($user_data['gender']=="male") 
                    {
                        $image="./assets/user_male.jpg";
                    } 
                    else if($user_data['gender']=="female") 
                    {
                        $image="./assets/user_female.jpg";
                    }  
                }
        ?>
<div id="blue_bar">
        <div style="width: 800px;margin:auto; font-size:30px;">
            <a href="index.php" style="text-decoration:none; color:white;">Blog-Mantra </a>
            
            
            &nbsp; &nbsp; 
            <input type="text" id="search_box" placeholder="Search for Writers">
            
            
            <img src="<?php echo $image; ?>" style="width: 50px;float: right; border-radius: 50px;">
            
            <a href ="logout.php">
                <span style="color:white; font-size:12px; float:right; margin:18px;">  Logout</span>
            </a>
        </div>
    </div>