<table>
    <tr>
        <td>
	Cid
        </td>
        <td>
	Name
        </td>
	<td>
	Operate
	</td>
    </tr>
<?php
     foreach($content as $row){
	echo "<tr><td>
		".$row['Content']['id']."
	      </td>
	      <td>
		".$row['Content']['name']."
	      </td>
	      <td>
		<a href='delcon/".$row['Content']['id']."'> Delete </a>
	      </td></tr>
 	     ";
     }
?>
</table>
