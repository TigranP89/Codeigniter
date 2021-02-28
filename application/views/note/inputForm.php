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

<div id="input_form"> 
    <form action="user_note" method="POST"> 
	<label for="dynamic-label-input">Title</label></br>
	<input type="text" name="title" class="docketTi" placeholder="Title"></br>
	<label for="dynamic-label-input">Enter some text</label></br>
        <textarea name="text" rows="2" cols="10" class="docket" placeholder="Enter some text"></textarea></br>             
        <button>Add</button> 
    </form>        
</div>