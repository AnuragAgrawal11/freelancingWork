<?php session_start(); ?>
   <div>
<form name="search" id="search" method="POST" action="ViewProfilesAction.php">

  <p><label><font color="#FF9900" size="4"><u>Accomodation</u> :</font></label>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="accomodation_type" style="width:45%">
      <option selected value="Independent House / Bunglow ">Independent House / Bunglow </option>
      <option value="Flat / Multistorey">Flat / Multistorey</option>
	  <option value="Rooms">Rooms</option>
	  <option value="Cottages">Cottages</option>
	  <option value="Hut">Hut</option>
	  <option value="Traditional House">Traditional House</option>
	  </select>
  <br/><br/>
  
  <p><label><font color="#FF9900" size="4"><u>Destination</u> :</font></label>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <label><font color="#0033FF" size="3">State</font></label>
  &nbsp;
  <select name="state">
  
	<option value="Andaman Nicobar Islands">Andaman Nicobar Islands</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunanchal Pradesh">Arunanchal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chattisgarh">Chattisgarh</option>
    <option value="Delhi">Delhi</option>
    <option value="Goa">Goa</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Jammu And Kashmir">Jammu And Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Madhya  Pradesh">Madhya  Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Orissa">Orissa</option>
    <option value="Pondichery">Pondichery</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamilnadu">Tamilnadu</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttaranchal">Uttaranchal</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="West Bengal">West Bengal</option>
  </select>
  &nbsp;&nbsp;&nbsp;&nbsp;
  
  <label><font color="#0033FF" size="3">City</font></label> 
  &nbsp;&nbsp;
  <select name="city">
    <option value="Agra">Agra</option>
	<option value="Agartala">Agartala </option>
	<option value="Ahmedabad">Ahmedabad</option>
	 <option value="Aizawl">Aizawl </option>
	 <option value="Ajmer">Ajmer</option>
	 <option value="Allahabad">Allahabad</option>
     <option value="Alleppey">Alleppey</option>
     <option value="Alwar">Alwar</option>
    <option value="Amritsar">Amritsar</option>
    <option value="Aurangabad">Aurangabad</option>
	<option value="Bangalore">Bangalore </option>
	<option value="Bhopal">Bhopal </option>
	<option value="Bhubaneswar">Bhubaneswar </option>
	 <option value="Bikaner">Bikaner</option>
	 <option value="Bundi">Bundi</option>
	 <option value="Canacona">Canacona</option>
     <option value="Chandigarh">Chandigarh</option>
     <option value="Chennai">Chennai </option>
    <option value="Cochin">Cochin</option>
    <option value="Coimbatore">Coimbatore</option>
	<option value="Cuttack">Cuttack</option>
	<option value="Darjeeling">Darjeeling</option>
	<option value="Delhi">Delhi </option>
	<option value="Dehradun">Dehradun </option>
	 <option value="Dhanbad">Dhanbad</option>
	 <option value="Dharmshala">Dharmshala</option>
	 <option value="Dispur">Dispur </option>
     <option value="Durgapur">Durgapur</option>
     <option value="Faridabad">Faridabad</option>
    <option value="Gandhinagar">Gandhinagar </option>
    <option value="Gangtok">Gangtok </option>
	<option value="Gaya">Gaya</option>
	<option value="Gulmarg">Gulmarg</option>
	<option value="Gurgaon">Gurgaon</option>
	 <option value="Guwahati">Guwahati</option>
	 <option value="Gwalior">Gwalior</option>
	 <option value="Hampi">Hampi</option>
     <option value="Hassan">Hassan</option>
     <option value="Hyderabad">Hyderabad </option>
    <option value="Imphal">Imphal </option>
    <option value="Indore">Indore </option>
	<option value="Itanagar">Itanagar </option>
	<option value="Jaipur">Jaipur </option>
	<option value="Jaisalmer">Jaisalmer</option>
	 <option value="Jammu">Jammu </option>
	 <option value="Jamshedpur">Jamshedpur</option>
	 <option value="Jodhpur">Jodhpur</option>
     <option value="Kanyakumari">Kanyakumari</option>
     <option value="Khajuraho">Khajuraho</option>
    <option value="Kodaikanal">Kodaikanal</option>
    <option value="Kohima">Kohima</option>
	<option value="Kolkata">Kolkata</option>
	<option value="Konark">Konark</option>
	<option value="Kovalam">Kovalam</option>
	 <option value="Kozhikode">Kozhikode</option>
	 <option value="Kullu">Kullu</option>
	 <option value="Kumarakom">Kumarakom</option>
     <option value="Ladakh">Ladakh</option>
     <option value="Leh">Leh</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Ludhiana">Ludhiana</option>
	<option value="Madurai">Madurai</option>
	<option value="Manali">Manali</option>
	<option value="Mangalore">Mangalore</option>
	 <option value="Margao">Margao</option>
	 <option value="Mumbai">Mumbai</option>
     <option value="Munnar">Munnar</option>
     <option value="Murshidabad">Murshidabad</option>
    <option value="Mysore">Mysore</option>
    <option value="Nagpur">Nagpur</option>
	<option value="Nainital">Nainital</option>
    <option value="Nalanda">Nalanda</option>
	<option value="Old Goa">Old Goa</option>
	<option value="Ooty">Ooty</option>
	<option value="Orchha">Orchha</option>
	 <option value="Pahalgam">Pahalgam</option>
	 <option value="Panaji">Panaji</option>
	 <option value="Patiala">Patiala</option>
     <option value="Patna">Patna</option>
     <option value="Ponda">Ponda</option>
    <option value="Pune">Pune</option>
    <option value="Puri">Puri</option>
	<option value="Quilon">Quilon</option>
    <option value="Rajgir">Rajgir</option>
	<option value="Rameshwaram">Rameshwaram</option>
	<option value="Ranakpur">Ranakpur</option>
	<option value="Ranchi">Ranchi</option>
	<option value="Rishikesh-Haridwar">Rishikesh-Haridwar</option>
	 <option value="Shekhawati">Shekhawati</option>
	 <option value="Shillong">Shillong</option>
	 <option value="Shimla">Shimla</option>
     <option value="Srinagar">Srinagar</option>
     <option value="Surat">Surat</option>
    <option value="Tezpur">Tezpur</option>
    <option value="Thanjavur">Thanjavur</option>
	<option value="Thekkady">Thekkady</option>
	 <option value="Tirupati">Tirupati</option>
	 <option value="Trichy">Trichy</option>
	 <option value="Trivandrum">Trivandrum</option>
     <option value="Udaipur">Udaipur</option>
     <option value="Udupi">Udupi</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Vaishali">Vaishali</option>
	<option value="Varanasi">Varanasi</option>
	<option value="Vasco Da Gama">Vasco Da Gama</option>
	 <option value="Vijayawada">Vijayawada</option>
	 <option value="Visakhapatnam">Visakhapatnam</option>
	 <option value="Warangal">Warangal</option>
  </select>
  <br/><br/>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label></label>
  <input type="submit" name="Submit" value="Submit" style="width:120px;"/>
  </p>
  
  
</form>
</div>