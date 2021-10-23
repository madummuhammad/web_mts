$('input[type="file"]').change(function(e) {
	var reader = new FileReader();
	reader.onload = function(e) {
		document.querySelector("#preview").src = e.target.result;
	};
	reader.readAsDataURL(this.files[0]);
});

$('input[type="file"]').change(function(e) {
	var reader = new FileReader();
	reader.onload = function(e) {
		var thumb_edit_galeri = $("[data-toggle=thumb-edit-galeri]");
		for (let i = 0; i < thumb_edit_galeri.length; i++) {
			thumb_edit_galeri[i].src = e.target.result;
		}
	};
	reader.readAsDataURL(this.files[0]);
});