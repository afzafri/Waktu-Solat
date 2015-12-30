<?php
	
	//file fetch_data.php untuk receive value dan return value untuk drop down ajax
	
	$zon = $_POST['get_option'];
	
	echo "<option value=''>Pilih Zon</option>";
	
	if($zon == "jhr")
	{
		echo " <option value='jhr01'>Pulau Aur dan Pemanggil</option>
		<option value='jhr02'>Kota Tinggi, Mersing, Johor Bahru</option>
		<option value='jhr03'>Kluang dan Pontian</option>
		<option value='jhr04'>Batu Pahat, Muar, Segamat, Gemas</option>
		";
	}
	else if($zon == "kdh")
	{
		echo " <option value='kdh01'>Kota Setar, Kubang Pasu, Pokok Sena</option>
		<option value='kdh02'>Pendang, Kuala Muda, Yan</option>
		<option value='kdh03'>Padang Terap, Sik</option>
		<option value='kdh04'>Baling</option>
		<option value='kdh05'>Kulim, Bandar Bahru</option>
		<option value='kdh06'>Langkawi</option>
		<option value='kdh07'>Gunung Jerai</option>
		";
	}
	else if($zon == "ktn")
	{
		echo " <option value='ktn01'>K.Bharu,Bachok,Pasir Puteh,Tumpat,Pasir Mas,Tnh. Merah,Machang,Kuala Krai,Mukim Chiku</option>
		<option value='ktn03'>Jeli, Gua Musang (Mukim Galas, Bertam)</option>
		";
	}
	else if($zon == "kl")
	{
		echo " <option value='sgr03'>Kuala Lumpur</option>";
	}
	else if($zon == "wly")
	{
		echo " <option value='wly02'>Labuan</option>";
	}
	else if($zon == "mlk")
	{
		echo " <option value='mlk01'>Bandar Melaka, Alor Gajah, Jasin, Masjid Tanah, Merlimau, Nyalas</option>";
	}
	else if($zon == "ngs")
	{
		echo " <option value='ngs01'>Jempol, Tampin</option>";
		echo " <option value='ngs02'>Port Dickson, Seremban, Kuala Pilah, Jelebu, Rembau</option>";
	}
	else if($zon == "phg")
	{
		echo " <option value='phg01'>Pulau Tioman</option>
		<option value='phg02'>Kuantan, Pekan, Rompin, Muadzam Shah</option>
		<option value='phg03'>Maran, Chenor, Temerloh, Bera, Jerantut</option>
		<option value='phg04'>Bentong, Raub, Kuala Lipis</option>
		<option value='phg05'>Genting Sempah, Janda Baik, Bukit Tinggi</option>
		<option value='phg06'>Bukit Fraser, Genting Higlands, Cameron Higlands</option>
		";
	}
	else if($zon == "prk")
	{
		echo " <option value='prk01'>Tapah,Slim River dan Tanjung Malim</option>
		<option value='prk02'>Ipoh, Batu Gajah, Kampar, Sg. Siput dan Kuala Kangsar</option>
		<option value='prk03'>Pengkalan Hulu, Grik dan Lenggong</option>
		<option value='prk04'>Temengor dan Belum</option>
		<option value='prk05'>Teluk Intan, Bagan Datoh, Kg.Gajah,Sri Iskandar, Beruas,Parit,Lumut,Setiawan dan Pulau Pangkor</option>
		<option value='prk06'>Selama, Taiping, Bagan Serai dan Parit Buntar</option>
		<option value='prk07'>Bukit Larut</option>
		";
	}
	else if($zon == "pls")
	{
		echo " <option value='pls01'>Kangar, Padang Besar, Arau</option>";
	}
	else if($zon == "png")
	{
		echo " <option value='png01'>Seluruh Negeri Pulau Pinang</option>";
	}
	else if($zon == "ptj")
	{
		echo " <option value='sgr04'>Putrajaya</option>";
	}
	else if($zon == "sbh")
	{
		echo " <option value='sbh01'>Zon 1 - Sandakan, Bdr. Bkt. Garam, Semawang, Temanggong, Tambisan</option>
		<option value='sbh02'>Zon 2 - Pinangah, Terusan, Beluran, Kuamut, Telupit</option>
		<option value='sbh03'>Zon 3 - Lahad Datu, Kunak, Silabukan, Tungku, Sahabat, Semporna</option>
		<option value='sbh04'>Zon 4 - Tawau, Balong, Merotai, Kalabakan</option>
		<option value='sbh05'>Zon 5 - Kudat, Kota Marudu, Pitas, Pulau Banggi</option>
		<option value='sbh06'>Zon 6 - Gunung Kinabalu</option>
		<option value='sbh07'>Zon 7 - Papar, Ranau, Kota Belud, Tuaran, Penampang, Kota Kinabalu</option>
		<option value='sbh08'>Zon 8 - Pensiangan, Keningau, Tambunan, Nabawan</option>
		<option value='sbh09'>Zon 9 - Sipitang, Membakut, Beaufort, Kuala Penyu, Weston, Tenom, Long Pa Sia</option>
		";
	}
	else if($zon == "swk")
	{
		echo " <option value='swk01'>Zon 1 - Limbang, Sundar, Terusan, Lawas</option>
		<option value='swk02'>Zon 2 - Niah, Belaga, Sibuti, Miri, Bekenu, Marudi</option>
		<option value='swk03'>Zon 3 - Song, Belingan, Sebauh, Bintulu, Tatau, Kapit</option>
		<option value='swk04'>Zon 4 - Igan, Kanowit, Sibu, Dalat, Oya</option>
		<option value='swk05'>Zon 5 - Belawai, Matu, Daro, Sarikei, Julau, Bitangor, Rajang</option>
		<option value='swk06'>Zon 6 - Kabong, Lingga, Sri Aman, Engkelili, Betong, Spaoh, Pusa, Saratok, Roban, Debak</option>
		<option value='swk07'>Zon 7 - Samarahan, Simunjan, Serian, Sebuyau, Meludam</option>
		<option value='swk08'>Zon 8 - Kuching, Bau, Lundu,Sematan</option>
		<option value='swk09'>Zon 9 - Zon Khas</option>
		";
	}
	else if($zon == "sgr")
	{
		echo " <option value='sgr01'>Gombak,Hulu Selangor,Rawang, Hulu Langat,Sepang,Petaling, Shah Alam</option>
		<option value='sgr02'>Sabak Bernam, Kuala Selangor,  Klang, Kuala Langat</option>
		";
	}
	else if($zon == "trg")
	{
		echo " <option value='trg01'>Kuala Terengganu, Marang</option>
		<option value='trg02'>Besut, Setiu</option>
		<option value='trg03'>Hulu Terengganu</option>
		<option value='trg04'>Kemaman Dungun</option>
		";
	}

	
	
	exit;
	


?>