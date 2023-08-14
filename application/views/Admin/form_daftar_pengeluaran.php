
<div class="container mx-auto">
	<img src="<?php echo base_url('Aset/logo-text.png') ?>">
	<center>
		<h2 class="text-4xl font-bold py-[5%]"><?php echo $judul; ?></h2>
		<form class="bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4" action="" method="post">
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Tanggal
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="date" name="tanggal" >
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			      Jenis Barang
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" name="nama_pemesan" placeholder="Lotto">
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			        Nominal
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="number" name="alamat" value="">
			    </div>
			  </div>
			  <div class="md:flex md:items-center mb-6">
			    <div class="md:w-1/5">
			      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
			       Bukti Struk
			      </label>
			    </div>
			    <div class="md:w-2/3">
			      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="file" name="buktitf">
			    </div>
			  </div>
			 
		    <div>
		      <input class="bg-[#919191] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" name="tambah" value="tambah">
		      <br>
		      <br>
		      <a class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?php echo site_url('Admin/daftar_pegawai') ?>">batal</a>
		    </div>
		  </form>
	</center>
</div>	