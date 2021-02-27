<div class="personalDiv">
    <div class="logout">
	<form action="logoutSession" method="POST">
            <button>LOGOUT</button>	
	</form>	
    </div>
    <div class="showNote">
	<form action="showAllNotes" method="POST">
            <button>All Notes</button>	
	</form>
	<form action="showUserNote" method="POST">
            <button>User Notes</button>	
	</form>
	<form action="contacts" method="POST">
            <button>Contacts</button>	
	</form>
    </div>	
</div>



<form action="saveEdit" method="POST"> 	    
    <table align="center">
	<tr aling="center">
            <th colspan="2">Personal Information</th>
	</tr>
	<tr>
            <th>User ID</th><td><?php echo $user_info->id; ?></td>
	</tr>
	<tr>
            <th>First Name</th><td><input class="userStyle" type="text" name="fname" value="<?php echo $user_info->fname; ?>"></td>
	</tr>
	<tr>
            <th>Last Name</th><td ><input class="userStyle" type="text" name="lname" value="<?php echo $user_info->lname; ?>"></td>
	</tr>
	<tr>
            <th>Email</th><td><?php echo $user_info->email; ?></td>
	</tr>
	<tr>
            <th>Registration Date</th><td><?php echo $user_info->date; ?></td>
        </tr>
    </table>

    <div class="save">	
	<button>Save</button>	
    </div>

</form>
