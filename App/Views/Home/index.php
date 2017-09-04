
	<h1>index de home</h1>
</body>
<table>
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<tbody>
			<?php 
foreach ($this->datos as $key => $value) {
			echo "<tr>
					<td>".$value['id']."</td>
					<td>".$value['user']."</td>
					<td>".$value['email']."</td>
					<td>".$value['pass']."</td>
				</tr>";
}
?>

		</tr>
	</thead>
</table>

