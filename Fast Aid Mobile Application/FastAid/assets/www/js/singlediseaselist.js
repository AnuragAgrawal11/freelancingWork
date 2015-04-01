var scroll = new iScroll('wrapper', { vScrollbar: false, hScrollbar:false, hScroll: false });

var id1 = getUrlVars()["id"];
//alert(id1);
var db;

document.addEventListener("deviceready", onDeviceReady, false);

function onDeviceReady() {
	console.log("opening database");
    db = window.openDatabase("EmployeeDirectoryDB", "1.0", "PhoneGap Demo", 200000);
	console.log("database opened");
    db.transaction(getEmployee, transaction_error);
}

function transaction_error(tx, error) {
	$('#busy').hide();
    alert("Database Error: " + error);
}

function getEmployee(tx) {
	$('#busy').show();
	var sql = "select e.id, e.disease, e.about, e.med1, e.med2, e.med3, e.med4, e.med5,e.med6,e.med7,e.med8,e.med9,e.med10, e.image from medicine AS e WHERE e.id=:id1";
	
	tx.executeSql(sql, [id1], getEmployee_success);
}

function getEmployee_success(tx, results) {
	$('#busy').hide();
	//alert("yay");
    var len = results.rows.length;
    //alert(len);
	if(len==0){
		alert("No results to display")
		window.location.href="index.html";
		}
	else{
		$('#busy').hide();
	
		var medicine = results.rows.item(0);
		
		$('#employeeList').append('<h3>' + medicine.disease + '</h3>'+ medicine.about);
		if(medicine.med1!="")	
		$('#med1').append('1. ' +medicine.med1);
		if(medicine.med2!="")
		$('#med2').append('2. ' +medicine.med2);
		if(medicine.med3!="")
		$('#med3').append('3. ' +medicine.med3);
		if(medicine.med4!="")
		$('#med4').append('4. ' +medicine.med4);
		if(medicine.med5!="")
		$('#med5').append('5. ' +medicine.med5);
		if(medicine.med6!="")
		$('#med6').append('6. ' +medicine.med6);
		if(medicine.med7!="")
		$('#med7').append('7. ' +medicine.med7);
		if(medicine.med8!="")
		$('#med8').append('8. ' +medicine.med8);
		if(medicine.med9!="")
		$('#med9').append('9. ' +medicine.med9);
		if(medicine.med10!="")
		$('#med10').append('10. ' +medicine.med10);
		//alert(medex);
    
	}
	setTimeout(function(){
		scroll.refresh();
	});
	db = null;
}

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
