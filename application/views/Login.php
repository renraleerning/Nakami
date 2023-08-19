
	<div class="w-96 border-4 border-black ml-[40%] mb-[20%] mt-[10%]">
		<h1 class="text-4xl font-bold text-center pb-6">Login</h1>
		<form action="<?php echo site_url('Home/logging') ?>" method='post'>
			<center>
			<input type="text" name="username" placeholder="Username" class=" mx-auto bg-[#919191] rounded placeholder-black placeholder:text-center input:text-center mb-4">
			<br>
			<input type="password" name="password" placeholder="Password" class=" mx-auto bg-[#919191] rounded placeholder-black placeholder:text-center mb-4">
			<br>
			<input class=" font-bold bg-[#0cc0df] py-2 px-8 rounded cursor-pointer " type="submit" name="Masuk">
			<br>
			<br>
			<a class="font-bold bg-[#7ed957] py-2 px-4 rounded cursor-pointer mt-6"  href="<?php echo site_url('Home/register') ?>">Register</a>
			<br>
			<br>
		</center>
		</form>
	</div>
	<footer class="bg-[#919191] w-full"><pre> </pre> </footer>
</body>
</html>