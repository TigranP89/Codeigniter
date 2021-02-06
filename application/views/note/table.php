<table>    
 	<?php foreach	($query as $key => $value) : ?>
		
			<tr>
			    <td><?php $value['id']; ?></php></td>
   				<td><?php $value['text']; ?></php></td>
				<td><?php $value['date']; ?></php></td>   				 
  			</tr>
		
 	<?php endforeach ?>           
 </table>