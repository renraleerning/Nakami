<div class="col-span-5">
			<div class="flex flex-between">
				<a class="mt-2 text-center font-bold text-lg py-2 px-2 w-40 bg-[#919191] border-2 border-black rounded-xl" href="<?php echo site_url('Admin/form_tambah_pengeluaran') ?>">Tambah Entri</a>	

			</div>
			<table border="1" class="bg-[#919191] w-full border-2 rounded border-black mt-[9px]">
				<tr>
					<th class="text-lg">ID</th>
					<th class="text-lg">Tanggal</th>
					<th class="text-lg">Jenis Barang</th>
					<th class="text-lg">Nominal</th>
					<th class="text-lg">Bukti Struk</th>
					<th class="text-lg">Opsi</th>
				</tr>
				<?php
				foreach ($pemasukan as $key) {
					?>
					<tr>
						<td class="text-center border-2 border-black"><?php echo $key->id; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->tanggal; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->jenis_barang; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->nominal; ?></td>
						<td class="border-2 border-black pl-2"><?php if ($key->bukti_struk==null) {
							echo "-";
						}else{
							?>
							<img src="<?php echo base_url('Aset/bukti/').$key->bukti_struk; ?>">
							<?php
							
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