<div class="col-span-5">
			<div class="flex justify-between">
			<a class="mt-2 text-center font-bold text-lg py-2 px-2 w-40 bg-[#919191] border-2 border-black rounded-xl" href="<?php echo site_url('Admin/form_gaji_pegawai') ?>">Tambah Entri</a>
			<div>
				<select id="change" onchange="ontam()" class="mt-2 text-center font-bold text-lg py-2 px-2 w-40 bg-[#919191] border-2 border-black rounded-xl hover:bg-white cursor-pointer">
					<?php
					foreach ($tgl as $key) {
						?>
						<option value="<?php echo $key->tanggal; ?>" <?php if (strcmp($tanggal, $key->tanggal)==0) {
							echo "selected";
						} ?>><?php echo $key->tanggal; ?></option>
						<?php
					}
					?>
				</select>
				<a id="tampil" class="mt-2 text-center font-bold text-lg py-2 px-2 w-40 bg-[#919191] border-2 border-black rounded-xl hover:bg-white cursor-pointer" href="">Tampilkan</a>
				<script type="text/javascript">
					function ontam(){
						let ganti=document.getElementById("change").value;
						document.getElementById("tampil").href = "<?php echo site_url('Admin/gaji_pegawai/')?>".concat(ganti);
					}
				</script>
			</div>
			</div>
			<table border="1" class="bg-[#919191] w-full border-2 rounded border-black mt-[9px]">
				<tr>
					<th class="text-lg">ID</th>
					<th class="text-lg">NIK</th>
					<th class="text-lg">Nama</th>
					<th class="text-lg">Jabatan</th>
					<th class="text-lg">Gaji</th>
					<th class="text-lg">Opsi</th>
				</tr>
				<?php
				foreach ($gaji as $key) {
					?>
					<tr>
						<td class="text-center border-2 border-black"><?php echo $key->id; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->nik; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->nama; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->jabatan; ?></td>
						<td class="border-2 border-black pl-2"><?php echo $key->gaji; ?></td>
						<td class="border-2 border-black w-36">
							<a class="ml-[5px] text-center font-bold text-lg px-2 bg-[green] hover:bg-white border-2 border-black rounded-xl" href="<?php echo site_url('Admin/edit_gaji/').$key->id ?>">edit</a>
							<a class=" text-center font-bold text-lg px-2 bg-[red] hover:bg-white border-2 border-black rounded-xl" href="<?php echo site_url('Admin/hapus_gaji_pegawai/').$key->id ?>">delete</a>
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