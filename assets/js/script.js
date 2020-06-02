// // ambil elemen2 yang di butuhkan
// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');


// keyword.addEventListener('keyup', function(){
// 	//console.log('hallo');

// // 	//buat object ajax
// 	var xhr = new XMLHttpRequest();
	
// // 	//cek kesiapan ajax
// 	xhr.onreadystatechange = function(){
// 		if(xhr.readyState == 4 && xhr.status == 200){
//             // console.log('Hello');
// 			container.innerHTML = xhr.responseText;
// 		}
// 	}


// // 	// //eksekusi ajax
// 	xhr.open('GET', 'https://ourcitrus.id/?keyword='+keyword.value, true);
// 	xhr.send();


// });
// $(document).ready(function(){
//     $('#btn-search').click(function(){
//         $(this).html("SEARCHING...").attr("disabled", "disabled");

//         $.ajax({
//             url: baseurl + 'main/cari',
//             type: 'POST',
//             data:{keyword: $('#keyword').val()},
//             dataType: "json",
//             beforeSend: function(e){
//                 if(e && e.overrideMimeType){
//                     e.overrideMimeType("application/json;charset=UTF-8");
//                 }
//             },
//             success: function(response){
//                 $('#btn-search').html('SEARCH').removeAttr('disabled');
//                 $('#view').html(response.hasil);
//             },
//             error: function(xhr, ajaxOptions, thrownError){
//                 alert(xhr.responseText);
//             }
//         });
//     });
// });

$(document).ready(function(){
    $('#tombol-cari').hide();
    $('#container').hide();

    $('#keyword').on('keyup', function(){
        console.log('ok!');
        $.get('https://ourcitrus.id/main/cari/?keyword='+$('#keyword').val(), function(data){
            $('#container').show();
                $('#container').html(data);
        });
    });
});