create database Nakami;
	use nakami;
	create table daftar_barang(
		id int not null primary key auto_increment,
		nama_barang varchar(100) not null,
		jenis_bahan varchar(100) not null,
		stok_barang varchar(100) not null,
		keterangan text
		);
	create table daftar_pegawai(
		nik varchar(20) not null primary key,
		nama varchar(120) not null,
		jabatan varchar(70) not null,
		alamat text not null,
		masuk date,
		keluar date,
		status varchar(20) not null
		);
	create table daftar_pemasukan(
		id int not null primary key auto_increment,
		tanggal date not null,
		nama_pemesan varchar(120) not null,
		nominal bigint not null,
		bukti_transfer text 
		);
	create table daftar_pengeluaran(
		id int not null primary key auto_increment,
		tanggal date not null,
		jenis_barang varchar(50) not null,
		nominal bigint not null,
		bukti_struk text
		);
	create table daftar_pesanan(
		id int not null primary key auto_increment,
		tanggal date not null,
		nama_pemesan varchar(120) not null,
		jenis_pesanan varchar(100) not null,
		qty int not null,
		harga_satuan bigint not null,
		jumlah bigint not null,
		DP bigint not null,
		keterangan text
		);
	create table gaji_pegawai(
		id int not null primary key auto_increment,
		nik varchar(20) not null,
		gaji bigint not null,
		tanggal date not null,
		FOREIGN KEY (nik) REFERENCES daftar_pegawai(nik) 
		);

	insert into daftar_barang values
		(null, 'Jersey Pendek', 'PIKE','PER ROLE',null),
		(null, 'Jersey Panjang', 'PIKE','PER ROLE',null),
		(null, 'Jersey Polo', 'PIKE','PER ROLE',null),
		(null, 'Jaket WTF', 'TASLAN/ZN','PER ROLE',null),
		(null, 'Jersey Loto', 'LOTTO','PER ROLE',null),
		(null, 'GEARSET MEDIUM', 'PIKE&CONDURA','PER ROLE',null),
		(null, 'GEARSET PREMIUM', 'NIDLE&CONDURA','PER ROLE',null),
		(null, 'KAOS', 'COTTON&PE 30S DLL','PER ROLE',null);

	insert into daftar_pegawai values
		('3211112233325577','Indra Hilmansyah','DESAIN','SUMEDANG','2023-06-21',null,'Aktif'),
		('3211112233235588','Juanda Hizkia','JAHIT','SUMEDANG','2023-02-02',null,'Aktif'),
		('3211112233335599','Galan Cahwiguna','PRINTING','SUMEDANG','2022-07-17','2023-03-19','Keluar'),
		('3211112233225544','Irvan Octavian K','ADMIN','SUMEDANG','2022-01-02',null,'Aktif');

	insert into daftar_pemasukan values
		(null,'2023-02-26','Erfan Gustiwana',2,null),
		(null,'2023-02-27','Tomi Abuyazeed',1,null),
		(null,'2023-02-28','Erick',4,null),
		(null,'2023-02-30','Ferdi Khaleed',1,null),
		(null,'2023-03-01','Raka',1,null);

	insert into daftar_pengeluaran values
		(null, '2023-03-02','BAHAN PIKE',2,null),
		(null, '2023-03-03','TRANSPORT',3,null),
		(null, '2023-03-03','LOTTO',10,null),
		(null, '2023-03-04','BAHAN PIKE',3,null),
		(null, '2023-03-04','COTTON',11,null);

	insert into daftar_pesanan values
		(null,'2023-11-26','Bobi','J.PANJANG',1,160000,160000,0,null),
		(null,'2023-11-26','Darul Ariv','J.POLO',2,180000,320000,0,null);

	insert into gaji_pegawai values
		(null, '3211112233325577',3000000,'2023-07-01'),
		(null, '3211112233235588',3000000,'2023-07-01'),
		(null, '3211112233335599',3000000,'2023-07-01'),
		(null, '3211112233225544',3500000,'2023-07-01');
	insert into gaji_pegawai values
		(null, '3211112233325577',3200000,'2023-08-01'),
		(null, '3211112233235588',3300000,'2023-08-01'),
		(null, '3211112233335599',3500000,'2023-08-01'),
		(null, '3211112233225544',3600000,'2023-08-01');

		create view daftar_gaji as select gaji_pegawai.id as id, gaji_pegawai.nik as nik, nama, jabatan, gaji, tanggal, masuk, keluar, status 
		from daftar_pegawai, gaji_pegawai
		where gaji_pegawai.nik=daftar_pegawai.nik;