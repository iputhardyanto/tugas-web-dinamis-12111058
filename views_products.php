
			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
            <form action="<?php print site_url();?>/backend/products/cari" method="POST">
<input type=text name=cari> <input type=submit value="cari">
</form>
<a href="<?php print site_url();?>/backend/products"> <b>tampilkan semua</b></a>

			<table>
				<tr>
					<th>No</th>					    
				    <th>Product Name</th>
				    <th>Quantity Per Unit</th>				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_produk as $row):	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

