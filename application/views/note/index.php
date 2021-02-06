<div id="input_form"> 
	<form action="user_note" method="POST"> 
	    <label for="dynamic-label-input">Enter some text</label>      
        <input type="text" name="text" id="docket" placeholder="Enter some text">               
        <button>Add</button> 
	</form>        
</div>

<table>
	<tr>
		<th>ID</th>
		<th>Text</th>
		<th>Date</th>
	</tr>  
	<?php

		foreach ($contents as $value){
			echo '<tr>';
			echo '<td>'.$value->id.'</td>';
			echo '<td>'.$value->text.'</td>';
			echo '<td>'.$value->date.'</td>';
			echo '</tr>';

		}


	 ?>
	
</table>