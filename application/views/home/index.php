<div class="<?php echo $classN ?>"> 
    <form > 
        <input type="button" value="REGISTER" class="regbtn" onclick="window.location.href='http://localhost/index.php/registration/index'">
    </form>
    <form>
        <input type="button" value="LOGIN" class="logbtn" onclick="window.location.href='http://localhost/index.php/login/index'">
    </form>
    
</div>

<div class="rightSide">
    <div class="userName">
        <a href="../../index.php/personal/index">
            <?php if($user_full_name!="") echo $user_full_name; ?>
        </a>
    </div>
    
        
        
    </div>
    

<div class="<?php echo $clearButton ?>">
    
        
    <div class="logout">
        <form action="index.php/home/logoutSession" method="POST">
            <button>LOGOUT</button>
        </form>
    </div>  
    
    
    <div class="showNote">
        <form action="index.php/home/showUserNote" method="POST">
            <button>User Notes</button>
        </form>
    </div>
    <div class="showNote">
        <form action="index.php/contacts/index" method="POST">
            <button>Contacts</button>
        </form>
    </div>
</div>



<?php if (isset($log)) echo $log ?>

<table>
    <tr>
	<th>ID</th>
	<th>Title</th>		
	<th>Text</th>
	<th>Date</th>
		
    </tr>  
    <?php

	foreach ($contents as $value){
            echo '<tr>';
            echo '<td>'.$value->id.'</td>';
            echo '<td>'.$value->title.'</td>';
            echo '<td>'.$value->text.'</td>';
            echo '<td>'.$value->date.'</td>';			
            echo '</tr>';
	}
    ?>	
</table>