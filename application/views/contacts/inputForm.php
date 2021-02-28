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

<div class="contactDiv">    
    <div class="showNote">
	<form action="showAllNotes" method="POST">
            <button>All Notes</button>	
	</form>
	<form action="showUserNote" method="POST">
            <button>User Notes</button>	
	</form>	
    </div>	
</div>

<div id="contact"> 
    <form action="contact_insert" method="POST"> 
	<label for="dynamic-label-input">Contact Name</label></br>
	<input type="text" name="contname" class="contname" placeholder="Contact Name"></br>
	<label for="dynamic-label-input">Phone namber</label></br>
        <input type="tel" name="phone" class="phone" placeholder="Phone namber"></br>              
        <button>Add</button>        
    </form>        
</div>