<?php
$url = 'https://api.punkapi.com/v2/beers';
$data = file_get_contents($url);
$result = json_decode($data,true);

print '<table class="table" style="width:60%">
				<thead>
					<tr>
						<th width="12">Ime pive</th>
						<th width="12">Datum prvog izdanja</th>
						<th width="12">Slika</th>
						<th width="12">Napravio</th>
					</tr>
				</thead>
				<tbody>';
				foreach($result as $key => $value) { 			
				print '
				<tr>
					<td style="color:white; text-align:center">' . $result[$key]["name"] . '</td>
					<td style="color:white; text-align:center">' . $result[$key]["first_brewed"] . '</td>
					<td style="color:white"><img src="' . $result[$key]["image_url"] . '" alt="" width="50" height="150"></td>
					<td style="color:white; text-align:center">' . $result[$key]["contributed_by"] . '</td>
				</tr>';
			}
			print '
			</tbody>
		</table>
	<form action="http://localhost/crud_app/index.php?menu=1">
<center><input type="submit" value="Nazad"> </center>
</form>';
?>

<!--
<figure id="1">
						<a href="https://media.ed.edmunds-media.com/bmw/m8/2020/oem/2020_bmw_m8_coupe_competition_s_oem_1_815.jpg" target="_blank" ><img src="https://media.ed.edmunds-media.com/bmw/m8/2020/oem/2020_bmw_m8_coupe_competition_s_oem_1_815.jpg" alt="BMW serija 8" title="BMW serija 8" width ="400" height ="250">
						<figcaption>Nova serija 8 u predivnoj plavoj boji.<figcaption>
					</figure> 