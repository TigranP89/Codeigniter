<div class="rightSide">
    <div class="userName">
        <a href="../../index.php/personal/index">
            <?php if($user_full_name!="") echo $user_full_name; ?>
        </a>
    </div>
        
    <div class="logout">
        <form action="logoutSession" method="POST">
            <button>LOGOUT</button>
        </form>
    </div>       
 </div>

<form action="saveContactEdit" method="POST"> 	    
    <table>
	<tr aling="center">
            <th colspan="2">Contact</th>
	</tr>
	<tr>
            <th>ID</th><td><input class="userStyle" type="text" name="contactId" value="<?php echo $contact_info->id; ?>"> </td> 
	</tr>
	<tr>
            <th>Name</th><td><input class="userStyle" type="text" name="contname" value="<?php echo $contact_info->contname; ?>"></td>
	</tr>
	<tr>
            <th>Phone number</th><td ><input class="userStyle" type="text" name="phone" value="<?php echo $contact_info->phone; ?>"></td>
	</tr>	
	<tr>
            <th>User ID</th><td><?php echo $contact_info->user_id; ?></td>
	</tr>
    </table>

    <div class="save">	
	<button>Save</button>	
    </div>
</form>