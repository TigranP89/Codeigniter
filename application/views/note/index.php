<div class="notePage">
    <div class="userName" >
	<a href="../../index.php/personal/index">
            <?php
		foreach ($instant_req as $val){
                    echo $val->fname."  ".$val->lname ;
		}
            ?>
	 </a>
    </div>
    
    <div class="logout">
	<form action="logoutSession" method="POST">
            <button>LOGOUT</button>	
	</form>	
    </div>

    <div class="showNote">
	<form action="showAllNotes" method="POST">
            <button>All Notes</button>	
	</form>		
    </div>
    
    <div class="showNote">
	<form action="fromNoteToConatct" method="POST">
            <button>Contacts</button>	
	</form>		
    </div>    
</div>

<div id="input_button"> 
    <form action="input_button" method="POST"> 	             
        <button>Add Note</button> 
    </form>        
</div>

<table id="inputForm">
    <tr>
        <th>ID</th>
	<th>Title</th>
	<th>Text</th>
	<th>Date</th>
	<th colspan="2" align="center">Action</th>	
    </tr>  
    <?php
	foreach ($contents as $value){
            echo '<tr>';
            echo '<td>'.$value->id.'</td>';
            echo '<td>'.$value->title.'</td>';
            echo '<td>'.$value->text.'</td>';
            echo '<td>'.$value->date.'</td>';
            //Detet Button
            echo '<td>';
            echo '<form action="deleteNote" method="POST">' ;
            echo '<input type="hidden" name="deletId" value="'.$value->id.'">';
            echo '<input type="submit" class="delete" name="submit" value="Delete">';
            echo '</form></td>';		
            //Edit Button
            echo '<td class="contact-edit">';
            echo '<form action="editNote" method="POST">' ;
            echo '<input type="hidden" name="editId"  value="'.$value->id.'">';
            echo '<input type="submit" name="submit" value="Edit">';
            echo '</form></td>';
            echo '</tr>';
	}
    ?>
	
</table>

<div id="clearBtn">
    <form action="clearNote" method="POST">
	<button>Clear</button> 
    </form>
</div>