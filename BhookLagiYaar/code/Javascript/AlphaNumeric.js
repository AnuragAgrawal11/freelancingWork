// JScript File

function IsAlphaNumeric(obj,mess)
{
   var ret = true;
   var strRegExp="[^A-Za-z0-9]";
 
    var charpos = obj.value.search(strRegExp); 
    
    if(obj.value.length > 0 &&  charpos >= 0) 
    { 
        alert(mess);
        obj.focus();
        ret = false; 
    }
   
 return ret;
}

