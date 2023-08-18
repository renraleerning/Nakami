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
							<center>
								<button class="text-center font-bold text-lg w-36 bg-white hover:bg-[#919191] hover:border-[white] border-[1px] border-black rounded-xl " onclick="openModal('modal<?php echo($key->id) ?>')">tampilkan</button>
							</center>
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

<?php
	foreach ($pemasukan as $key) {
		?>

<div id="modal<?php echo $key->id ?>" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 modal<?php echo $key->id; ?>">
    <div class="relative top-20 mx-auto shadow-xl rounded-md bg-white max-w-md">

        <!-- Modal header -->
        <div class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
            <h3>Bukti Struk</h3>
            <button onclick="closeModal('modal<?php echo $key->id ?>')">x</button>
        </div>

        <!-- Modal body -->
        <div class="max-h-[500px] overflow-y-scroll p-4">
        	<table>
        		<tr>
        			<td>Jenis Barang</td>
        			<td> : <?php echo $key->jenis_barang ; ?></td>
        		</tr>
        		<tr>
        			<td>Tanggal</td>
        			<td> : <?php echo $key->tanggal ; ?></td>
        		</tr>
        	</table>
            <img src="<?php echo base_url('Aset/bukti/').$key->bukti_struk ?>">
        </div>

        <!-- Modal footer -->
        <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick="closeModal('modal<?php echo $key->id ?>')">Close</button>
        </div>
    </div>
</div>

		<script type="text/javascript">
		window.openModal = function(modalId) {
		  document.getElementById(modalId).style.display = 'block'
		  document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
		}

		window.closeModal = function(modalId) {
		  document.getElementById(modalId).style.display = 'none'
		  document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
		}
		</script>
		<?php
	}
?>
