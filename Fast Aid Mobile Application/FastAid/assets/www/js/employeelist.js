var db;
var dbCreated = false;

var scroll = new iScroll('wrapper', { vScrollbar: false, hScrollbar:false, hScroll: false });

document.addEventListener("deviceready", onDeviceReady, false);

function onDeviceReady() {
    db = window.openDatabase("EmployeeDirectoryDB", "1.0", "PhoneGap Demo", 200000);
    if (dbCreated)
    	db.transaction(getEmployees, transaction_error);
    else
    	db.transaction(populateDB, transaction_error, populateDB_success);
}

function transaction_error(tx, error) {
	$('#busy').hide();
    alert("Database Error: " + error);
}

function populateDB_success() {
	dbCreated = true;
    db.transaction(getEmployees, transaction_error);
}

function getEmployees(tx) {
	var sql = "select e.id, e.disease, e.about, e.med1, e.image from medicine AS e WHERE id=1";
	tx.executeSql(sql, [], getEmployees_success);
}

function getEmployees_success(tx, results) {
	$('#busy').hide();
    var len = results.rows.length;
    for (var i=0; i<len; i++) {
    	var medicine = results.rows.item(i);
		$('#employeeList').append('<li><a href="employeedetails.html?id=' + medicine.id + '">' +
				'<img src="pics/' + medicine.image + '" class="list-icon"/>' +
				'<p class="line1">' + medicine.disease + '</p>' +
				'<p class="line2">' + medicine.med1 + '</p>' +
				'<span class="bubble">' + 1 + '</span></a></li>');
    }
	setTimeout(function(){
		scroll.refresh();
	},100);
	db = null;
}

function populateDB(tx) {
	$('#busy').show();
	tx.executeSql('DROP TABLE IF EXISTS medicine');
	var sql = 
		"CREATE TABLE IF NOT EXISTS medicine ( "+
		"id INTEGER PRIMARY KEY AUTOINCREMENT, " +
		"disease VARCHAR(500), " +
		"about VARCHAR(5000), " +
		"med1 VARCHAR(1000), " +
		"med2 VARCHAR(1000), " + 
		"med3 VARCHAR(1000), " +
		"med4 VARCHAR(1000), " +
		"med5 VARCHAR(1000), " + 
		"med6 VARCHAR(1000), " +
		"med7 VARCHAR(1000), " +
		"med8 VARCHAR(1000), " +
		"med9 VARCHAR(1000), " +
		"med10 VARCHAR(1000), " +
		"extra VARCHAR(1000), " +
		"image VARCHAR(1000))";
    tx.executeSql(sql);

    tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (1, 'Abdominal Pain', 'Pain in the abdomen could occur due to multiple causes local causes within the abdomen, causes outside the abdomen, and causes affecting the whole body. Pain originating from the abdomen could arise from the different abdominal organs like liver, gall bladder, spleen, stomach, intestines and pancreas, or from the peritoneum (the lining of various organs and the inner wall of the abdomen), or abdominal wall.', 'Aztreonam', 'Budesonide', 'Doxycycline', 'Famotidine', 'Lansoprazole', 'Levofloxacin', 'Norfloxacin', 'Pantoprazole', 'Rabeprazole', 'Mepenzolate', 'Dexlansoprazole', 'steven_wells.jpg')");
    tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (2, 'Back Pain', 'Back pain affects eight in ten people at some point in their lives Ã¢â‚¬â€œ it can be a dull ache or sharp shooting pain any part of the back, and it can be caused by nerve or muscle problems, arthritis, or degenerative disc disease.\n', 'Aspirin', 'Buprenorphine', 'Duloxetine', 'Paracetamol', 'Nimesulide', 'Naproxen', 'Mefenamic Acid', 'Ketoprofen', 'Indomethacin', 'Ibuprofen', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (3, 'Bacillary Dysentery', 'Bacillary dysentery or Shigellosis is a common cause of gastro-enteritis worldwide and can cause bloody diarrhea (called dysentery) or non-bloody diarrhea. The sight of blood in stools can be frightening and the patient may seek immediate treatment.', 'Ampicillin', 'Ceftriaxone', 'Ciprofloxacin', 'Lomefloxacin', 'Norfloxacin', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (4, 'Back Pain at Workplace', 'Back pain affects eight in ten people at some point in their lives Ã¢â‚¬â€œ it can be a dull ache or sharp shooting pain any part of the back, and it can be caused by nerve or muscle problems, arthritis, or degenerative disc disease.', 'Duloxetine', 'Indomethacin', 'Ketoprofen', 'Nabumetone', 'Tolmetin', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (5, 'Back Pain', 'Back pain affects eight in ten people at some point in their lives Ã¢â‚¬â€œ it can be a dull ache or sharp shooting pain any part of the back, and it can be caused by nerve or muscle problems, arthritis, or degenerative disc disease.', 'Aspirin', 'Aspirin and Oxycodone', 'Buprenorphine', 'Diclofenac', 'Duloxetine', 'Ibuprofen', 'Indomethacin', 'Ketoprofen', 'Mefenamic Acid', 'Meperidine', 'Nimesulide', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (6, 'Halitosis(bad breath)', 'Halitosis is a condition where a person suffers from oral malodor or bad breath. It reduces a person self confidence and can cause embarrassment to the sufferer while communicating with other people. As a result, the affected person avoids social inter-actions and could be psychologically affected.', 'Chlorhexidine', 'Cimetidine', 'Ranitidine', '', '', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (7, 'Ballooning Mitral Valve Syndrome', 'Mitral Valve Prolapse (MVP) is a relatively common problem. The cause is unknown but genetically determined collagen disorder maybe responsible for it. If signs and symptoms arise it is due to leakage of blood through the valve. An echocardiogram is confirmatory of the diagnosis. MVP is not life-threatening in most of the cases and may not require treatment.', 'Nebivolol', '', '', '', '', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (8, 'Barrett Esophagus', 'Barrett esophagus is a condition where the inner lining of the esophagus changes to resemble the intestinal lining. It predisposes the patient to cancer.', 'Dexlansoprazole', 'Esomeprazole', 'Etanercept', 'Lansoprazole', 'Omeprazole', 'Pantoprazole', 'Porfimer Sodium', 'Rabeprazole', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (9, 'Cat Scratch Disease', 'Cat scratch disease (CSD) as the name suggests, is a disease that spreads through contact with cats. It occurs when a person is bitten or scratched by an infected cat or, when he comes in contact with an infected cat saliva or broken skin.', 'Doxycycline', '', '', '', '', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (10, 'Basal Cell Cancer of the Skin', 'Incidence - Basal cell cancer or basal cell carcinoma is the most common type of skin cancer that affects almost two million Americans each year. In fact it is the commonest cancer. One out of every third cancer is a skin cancer with most being basal cell carcinomas.', 'Vismodegib', '', '', '', '', '', '', '', '', '', '', 'steven_wells.jpg')");
	 tx.executeSql("INSERT INTO medicine (id,disease,about,med1,med2,med3,med4,med5,med6,med7,med8,med9,med10,extra,image) VALUES (11, 'Bedwetting', 'Bedwetting is considered a medical problem only after a child is at least three years old. Almost 15% of children above the age of three continue to wet their beds, and more boys wet their beds than girls. Sometimes it can be the sign of an emotional problem, but most children stop it on their own before puberty.', 'Vincristine', '', '', '', '', '', '', '', '', '', '', 'steven_wells.jpg')");
	
}
