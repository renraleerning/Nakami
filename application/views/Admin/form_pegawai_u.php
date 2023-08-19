<?php
	foreach ($pegawai as $key) {
	?>
<div class="container mx-auto">
	<img src="<?php echo base_url('Aset/logo-text.png') ?>">
	<center>
		<h2 class="text-4xl font-bold py-[5%]"><?php echo $judul; ?></h2>
		<form class="bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4" action="<?php echo site_url('Admin/update_pegawai') ?>" method="post">
		    <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        NIK
			      </label>
			    </div>
			    <div class="md:w-2/3">
			    	<input type="hidden" name="id" value="<?php echo $key->nik ?>">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="nik" value="<?php echo $key->nik ?>" readonly >
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Nama
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="nama" placeholder="Ipan" value="<?php echo $key->nama ?>">
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Jabatan
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="jabatan" placeholder="Admin" value="<?php echo $key->jabatan ?>">
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Alamat
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="alamat" placeholder="Sumedang" value="<?php echo $key->alamat ?>">
			    </div>
			  </div>
			  <div class="grid grid-cols-12 mb-6 md:items-center w-[73%]">
			    <div class="">
			      <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4 text-right" for="inline-full-name">
			       Masuk
			      </label>
			    </div>
			    <div class="col-span-3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-[97%] py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="date" name="masuk" value="<?php echo $key->masuk ?>">
			    </div>
			    <!-- <div>
			      <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4 text-mid" for="inline-full-name">
			        Keluar
			      </label>
			    </div>
			     <div class="col-span-3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="date" name="keluar">
			    </div> -->
			    <div>
			      <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4 text-mid" for="inline-full-name">
			        Status
			      </label>
			    </div>
			    <div class="col-span-3">
			      <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status">
			      	<option value="Aktif" <?php if (strcmp($key->status,'Aktif')==0) {
			      		echo "selected";
			      	} ?>>Aktif</option>
			      	<option value="Tidak" <?php if (strcmp($key->status,'Aktif')!=0) {
			      		echo "selected";
			      	} ?>>Tidak</option>
			      </select>
			    </div>
			  </div>

		    <div>
		      <input class="bg-[#919191] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" name="edit" value="edit">
		      <br>
		      <br>
		      <a class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?php echo site_url('Admin/daftar_pegawai') ?>">batal</a>
		    </div>
		  </form>
	</center>
</div>
<?php	
}
?>