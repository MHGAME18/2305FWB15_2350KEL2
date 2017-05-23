// function prosesRegistrasi(){
// 	$.ajax({
// 		url : "proses_registrasi.php",
// 		method : "POST"
// 	})
// 	.done(function (data) {
// 		$("#isicontent").html(data);
// 	})
// }

function datapribaditambah(){
	$.ajax({
		url: "form-proses-registrasi.php",
		method:"POST",
		data:{
			nama			:$("#nama").val(),
			tempat_lahir	:$("#kota").val(),
			tanggal_lahir	:$("#tanggalLahir").val(),
			jk				:$("#jk").val(),
			status			:$("#kawin").val(),
			alamat			:$("#alamat").val(),
			agama			:$("#agama").val(),
			no_telp			:$("#notelp").val(),
			email			:$("#email").val(),
			kewarganegaraan	:$("#kw").val(),
		}
	}).done(function(data){
	$("#dataPribadiTambah").html(data);
});
}

function dataakademiktambah(){
	$.ajax({
		url: "akademikTambah.php",
		method:"POST",
		data:{
			nim 			  :$("#nim").val(),
			prodi 			  :$("#prodi").val(),
			tanggal_terdaftar :$("#terdaftar").val(),
			angkatan 		  :$("#angkatan").val(),
			sumber_dana 	  :$("#dana").val(),
		}
	}).done(function(data){
	$("#dataAkademikTambah").html(data);
	});
}

function datapendTerakhirtambah(){
	$.ajax({
	url: "dataSekolahTambah.php",
	method: "POST",
	data: {
		jenis_sttb :$("#jenis").val(),
		tamat :$("#tahun_tamat").val(),
		smta :$("#smta").val(),
		jurusan_smta :$("#jurusan").val(),
		alamat :$("#alamat_smta").val(),
		no_ijazah :$("#ijazah").val(),
		tgl_ijazah :$("#tgl_smta").val(),
		jumlah_mapel :$("#ujian").val(),
		nilai_akhir :$("#nilai").val(),
	}
}).done(funtion(data){
	$("#dataSekolahTambah").html(data);
});
}

function dataortutambah(){
	$.ajax({
		url: "dataOrtuTambah.php",
		method: "POST",
		data: {
			nama_ayah :$("#nak").val(),
			tgl_lahir_ayah :$("#tanggal2").val(),
			status_ayah :$("#stay").val(),
			nama_ibu :$("#nik").val(),
			tgl_lahir_ibu :$("#tanggal3").val(),
			status_ibu :$("#stib").val(),
			alamat_ortu :$("#alamat").val(),
			telp_ortu :$("#notelportu").val(),
			pend_ayah :$("#pendidikan").val(),
			pekerjaan_ayah :$("#pekerjaan").val(),
			pend_ibu :$("#pendidikan2").val(),
			pekerjaan_ibu :$("#pekerjaan2").val(),
			penghasilan :$("#penghasilan").val(),
			kemampuan :$("#kemampuan").val(),
		}
	}).done(funtion(data){
		$("#dataOrtuTambah").htm(data);
	});
}