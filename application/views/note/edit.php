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

<form action="saveNoteEdit" method="POST"> 	    
    <table>
	<tr aling="center">
            <th colspan="2">Note</th>
	</tr>
	<tr>
            <th>Note ID</th><td><input class="userStyle" type="text" name="noteId" value="<?php echo $note_info->id; ?>"> </td> 
	</tr>
	<tr>
            <th>Title</th><td><input class="userStyle" type="text" name="title" value="<?php echo $note_info->title; ?>"></td>
	</tr>
	<tr>
            <th>Text</th><td ><input class="userStyle" type="text" name="text" value="<?php echo $note_info->text; ?>"></td>
	</tr>
	<tr>
            <th>Creation Date</th><td><?php echo $note_info->date; ?></td>
	</tr>
	<tr>
            <th>User ID</th><td><?php echo $note_info->user_id; ?></td>
	</tr>
    </table>

    <div class="save">	
	<button>Save</button>	
    </div>
</form>