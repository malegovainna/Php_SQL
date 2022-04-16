<h1>Добро пожаловать на наш первый сайт!</h1>
<table>
	<tr><th class='colname'>ID</th><th class='colname'>Title</th><th class='colname'>Content</th><th class='colname'>Postcard</th></tr>
	<?php 
		for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
		    $data->data_seek($row_no);
		    $row = $data->fetch_assoc();
		    echo "<tr><td class='colbord' >".$row['id_news']."</td><td class='mytitle colbord' >".$row['title']."</td><td class='mytext colbord'>".$row['content']."</td><td class='colbord'><img class='myimage' src='".$row['postcard']."' width='250'/></td></tr>";
		}
	?>
</table>