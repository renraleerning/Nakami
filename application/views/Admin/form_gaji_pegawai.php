<script type="text/javascript">
					 const jsonpegawai = '<?php echo json_encode($pegawai); ?>';
					 const pegawai = JSON.parse(jsonpegawai);
					function oncha(){
						let ganti=document.getElementById("change").value;
						document.getElementById("nik").value = pegawai[ganti]['nik'];;
						document.getElementById("jabatan").value = pegawai[ganti]['jabatan'];
						document.getElementById("masuk").value = pegawai[ganti]['masuk'];
						document.getElementById("status").value = pegawai[ganti]['status'];
					}
				</script>
<div class="container mx-auto">
	<img src="<?php echo base_url('Aset/logo-text.png') ?>">
	<center>
		<h2 class="text-4xl font-bold py-[5%]"><?php echo $judul; ?></h2>
		<form class="bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4" action="<?php echo site_url('Admin/tambah_gaji') ?>" method="post">
		    <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Nama Pegawai
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <select id="change" onchange="oncha()" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" >
			      	<?php
			      	$i=0;
			      		foreach ($pegawai as $key) {
			      			?>
			      			<option value="<?php echo $i; ?>" class="text-center"><?php echo $key->nama; ?></option>
			      			<?php
			      			$i++;
			      		}
			      	?>
			      </select>
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        NIK
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input id="nik" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="nik" value="<?php echo $pegawai['0']->nik ?>" readonly>
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Jabatan
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input id="jabatan" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="jabatan" value="<?php echo $pegawai['0']->jabatan ?>"  readonly>
			    </div>
			  </div>
			   <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Masuk
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input id="masuk" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="masuk" value="<?php echo $pegawai['0']->masuk ?>" readonly>
			    </div>
			  </div>
			   <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Status
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input id="status" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="status" value="<?php echo $pegawai['0']->status ?>" readonly>
			    </div>
			  </div>
			   <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Gaji (Rp)
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="number" name="gaji" placeholder="0">
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Gaji (Rp)
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="date" name="tanggal" value="<?php echo date("Y-m-d") ?>" >
			    </div>
			  </div>
		    <div>
		      <input class="bg-[#919191] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" name="tambah" value="tambah">
		      <br>
		      <br>
		      <a class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?php echo site_url('Admin/gaji_pegawai') ?>">batal</a>
		    </div>
		  </form>
	</center>
</div>	