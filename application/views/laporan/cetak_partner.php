
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pdf</title>
	<link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
  table{
    border-collapse: collapse;
  }
  tr>th{
    background-color: blue;
  }
  tr>th,tr>td{
    padding: 5px;
  }
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<table align="center">
				<tbody>
				<tr>
					<td colspan="3">
							<span><b><center><h3>PT. Progressio Nusantara Karya</h3></center></b></span>
						
						<div align="right">
							<span style="font-family: sans-serif; font-size: 14px;text-align: center;">
							<p>Jl. Raya Sunan Gunung Jati No 66 Desa Pasindangan Kecamatan Jamblang Kabupaten Cirebon</p></span>
							<hr>
						</div>
						
					</td>
				</tr>
				<tr>
					<td valign="top">
						<div align="center">
							
						</div>
					</td>
				</tr>
				<tr>
					<td width="302"></td>
					<td width="343"></td>
					<td width="339"></td>
				</tr>
				<tr>
					<td>
						<table border="0" style="width: 239px;">
						<tbody>
						</tbody>
						</table>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" height="270" valign="top">
						<div align="justify">
							<h4 align="center">DATA PARTNER</h4>
							<table border="1" width="480" style="text-align: center; margin-top: 30px;">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Nama Perusahaan</th>
									<th>Alamat </th>
									<th>Email</th>
									<th>Kebutuhan</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no =1;
								foreach ($partner as $key) { ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $key->nama_partner ?></td>
									<td><?php echo $key->nama_perusahaan ?></td>
									<td><?php echo $key->alamat_partner ?></td>
									<td><?php echo $key->email_partner ?></td>
									<td><?php echo $key->kebutuhan_partner ?></td>

								</tr>
							<?php } ?>
							</tbody>
						</table>
							<div align="justify">
								
							</div>
						</div>
						
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>
						<div align="center">
							
						</div>
						<br><br>
						<div align="center">
							
						</div>
					</td>
					<td></td>
					<td valign="top">
						<div align="center">
							<span style="font-size: 14px;">Cirebon, <?php echo date('d F Y') ?></span>
						</div>
						<br><br>
						<div align="center">
							<span style="font-size: 14px;">(..........................)</span>
						</div>
					</td>
				</tr>
				</tbody>
				</table>
		</div>
	</div>
</body>
</html>