var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

//         RELEASE 0
const listBarang = document.getElementById("listBarang");
function fillData(data){

	let data_list = "<div class='row'>";

	for(let i = 0; i < data.length; i++){

		data_list += "<div class='col-md-4 col-sm-12'>";

			data_list += "<div class='card' style='width: 100%;'>";

				data_list += "<img src='img/" + data[i][4] + "' width='100' height='200' class='card-img-top' alt='" + data[i][4] + "'>";
				data_list += "<div class='card-body'>";

					data_list += "<h5 class='card-title' id='itemName'>" + data[i][1] + "</h5>";
					data_list += "<p class='card-text' id='itemDesc'>" + data[i][3] + "</p>";
					data_list += "<p class='card-text'><font color='green'><b>Rp" + data[i][2] + "</b></font></p>";
					data_list += "<a href='#' class='btn btn-warning' id='addCart' onclick='onClick()'>Tambahkan ke keranjang</a>"

				data_list += "</div>";

			data_list += "</div>";

		data_list += "</div>";

	}
	data_list += "</div>";

	listBarang.innerHTML = data_list;
}

fillData(items);

//            RELEASE 1

var form = document.getElementById("formItem");
const search = document.getElementById("keyword");

function pencarian(){
	let result = [];

	let bt = document.querySelectorAll("#addCart");
		for(let i = 0; i < items.length; i++){
			//make sure the product is avaiable or not
			let x = 0;
			for(let j = 0; j < items[i].length; j++){
				if(items[i][j].toString().toLowerCase().includes(search.value.toLowerCase())){
					x++;
				}
			}
			if(x > 0){
				result.push(items[i]);
			}
		}
		if(result[0] === undefined){
			alert('Kata kunci tidak ditemukan, Mohon gunakan kata kunci lain');
			fillData(items);
		}
		else{
			fillData(result);
		}
}

form.addEventListener("submit", function(e){

	e.preventDefault();
	
	console.log("disini");
	if(search.value === ""){
		alert('Anda belum memasukan kata kunci!');
		fillData(items);
	}

	else if(search.value != ""){
		pencarian();
	}

})

// search.addEventListener("keyup", function(){
// 	pencarian();
// })

//                   RELEASE 2
let count = 0;
	
	function onClick(){
		
		count += 1;
		document.getElementById("items").innerHTML = count;

	}

/*
	
	<div class="card" style="width: 18rem;">
	    <img src="..." class="card-img-top" alt="...">
	    <div class="card-body">
	        <h5 class="card-title" id="itemName">Nama</h5>
	        <p class="card-text" id="itemDesc">Deskripsi barang</p>
	        <p class="card-text">Rp Harga</p>
	        <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
	    </div>
	</div>


*/

// ref : https://www.geeksforgeeks.org/javascript-string-prototype-indexof-function/

