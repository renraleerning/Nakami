<div class="col-span-5">
			<div class="flex flex-between">
				<a class="mt-2 text-center font-bold text-lg py-2 px-2 w-40 bg-[#919191] border-2 border-black rounded-xl" href="<?php echo site_url('Admin/form_pemesanan') ?>">Tambah Entri</a>	

			</div>
			<table border="1" class="bg-[#919191] w-full border-2 rounded border-black mt-[9px]">
				<tr>
					<th class="text-lg">ID</th>
					<th class="text-lg">Tanggal</th>
					<th class="text-lg">Nama Pemesan</th>
					<th class="text-lg">Jenis Pesanan</th>
					<th class="text-lg">QTY</th>
					<th class="text-lg">Harga Satuan</th>
					<th class="text-lg">Jumlah</th>
					<th class="text-lg">DP</th>
					<th class="text-lg">Keterangan</th>
					<th class="text-lg">Opsi</th>
				</tr>
				<?php
				foreach ($pesanan as $key) {
					?>
					<tr>
						<td class="text-center border-2 border-black"><?php echo $key->id; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->tanggal; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->nama_pemesan; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->jenis_pesanan; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->qty; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->harga_satuan; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->jumlah; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->DP; ?></td>
						<td class="border-2 border-black pl-2"><?php if ($key->keterangan==null) {
							echo "-";
						}else{
							echo $key->bukti_struk;
						} ?></td>
						
						<td class="border-2 border-black w-36">
							<a class="ml-[5px] text-center font-bold text-lg px-2 bg-[green] hover:bg-white border-2 border-black rounded-xl" href="">edit</a>
							<a class=" text-center font-bold text-lg px-2 bg-[red] hover:bg-white border-2 border-black rounded-xl" href="">delete</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>	
	</div>
	<footer class="bg-[#919191] w-full"><pre> </pre> </footer>
</body>
</html>