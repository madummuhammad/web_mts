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

$('input[type="file"]').change(function(e) {
	var reader = new FileReader();
	reader.onload = function(e) {
		var thumb_edit_carousel = $("[data-toggle=thumb-edit-carousel]");
		for (let i = 0; i < thumb_edit_carousel.length; i++) {
			thumb_edit_carousel[i].src = e.target.result;
		}
	};
	reader.readAsDataURL(this.files[0]);
});

(function($) {
	"use strict";
    // Morris bar chart
    $(document).ready(function(){
    	$.ajax({
    		url: "https://mtsattaqwajatingarang.sch.id/adminsystem/kesiswaan/json_kesiswaan",
    		type:'GET',
    		dataType:'json',
    		success: function(datas){
    			Morris.Bar({
    				element: 'chart-kesiswaan',
    				data: datas,
    				xkey: 'tahun',
    				ykeys: ['vii', 'viii','ix'],
    				labels: ['Kelas VII', 'Kelas VIII','Kelas IX'],
    				barColors: ['#343957', '#5873FE','#6B51DF'],
    				hideHover: 'auto',
    				gridLineColor: '#eef0f2',
    				resize: true
    			});
    		}
    	});
    });

})(jQuery);