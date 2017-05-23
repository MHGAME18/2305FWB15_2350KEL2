$(document).ready(function(){
	$('[data-toggle="offcanvas"]').click(function(){
		$('#menu-samping').toggleClass('hidden-xs');
	});
	$("#registrasi").on("click","#prosesRegistrasi", function(){
		$("#dataPribadiTambah").toggleClass('hidden-lg hidden-xs hidden-md');
		$("#akademikTambah").toggleClass('hidden-lg hidden-xs hidden-md');
		$("#dataSekolahTambah").toggleClass('hidden-lg hidden-xs hidden-md');
		$("#dataOrtuTambah").toggleClass('hidden-lg hidden-xs hidden-md');
	});
	// $("#registrasi").on("click","#dataRegistrasi", function(){
	// 	$("#dataPribadiTambah").toggleClass('hidden-lg hidden-xs hidden-md');
	// 	$("#akademikTambah").toggleClass('hidden-lg hidden-xs hidden-md');
	// 	$("#dataSekolahTambah").toggleClass('hidden-lg hidden-xs hidden-md');
	// 	$("#dataOrtuTambah").toggleClass('hidden-lg hidden-xs hidden-md');
	// });
});