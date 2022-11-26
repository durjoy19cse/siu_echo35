<?php include("includes/connecton.php");?>


	<?php 
	$sql= "select admission_notice.* from admisson_notice ";
	$result=$conn->query($sql);
	if($result->num_rows>0){

		while($row=$result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo  $row['date'];?></td>
				<td><img src='images/notice/<?php echo $row['notice_picture'];?>' width="80" height="100" ></td>\
                <td><a href="edit_notice.php?noticeid=<?php echo $row['notice_id'];?>"> Edit Notice</a></td>
                <td><a href="delete_notice.php?noticeid=<?php echo $row['notice_id'];?>"> delete Notice</a></td>

			</tr>




	<?php	}


		

	}


	?>
</table>



</div>



