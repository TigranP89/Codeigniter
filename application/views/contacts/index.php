<div class="userName" >
    <a>
        <?php
            foreach ($instant_req as $val){
            echo $val->fname."  ".$val->lname ;
            }
        ?>
    </a>
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



<div id="input_contact_button"> 
    <form action="input_button" method="POST"> 	             
        <button>Add Contact</button> 
    </form>        
</div>

<table id="inputForm">
    <tr>
	<th>ID</th>
	<th>Name</th>
	<th>Phone number</th>
        <th colspan="2" align="center">Action</th>
    </tr>  
    <?php
	foreach ($contact_table as $value){
            echo '<tr>';
            echo '<td>'.$value->id.'</td>';
            echo '<td>'.$value->contname.'</td>';
            echo '<td>'.$value->phone.'</td>';
            //Detet Button
            echo '<td>';
            echo '<form action="deleteContact" method="POST">' ;
            echo '<input type="hidden" name="deletContId" value="'.$value->id.'">';
            echo '<input type="submit" class="deleteCont" name="submit" value="Delete">';
            echo '</form></td>';		
            //Edit Button
            echo '<td class="contact-edit">';
            echo '<form action="editContact" method="POST">' ;
            echo '<input type="hidden" name="editContId"  value="'.$value->id.'">';
            echo '<input type="submit" name="submitCont" value="Edit">';
            echo '</form></td>';
            echo '</tr>';
	}
    ?>	
</table>