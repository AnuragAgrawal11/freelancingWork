// JScript File
function IsMobValid(obj)
{
   if(obj.value!="")
   {
    if(isNaN(obj.value))
    {
       alert("Please enter a contact number, numbers only !");
        obj.focus();
        return false;
    }
    else if(obj.value.length<10 || obj.value.length>15)
    {
        alert("Enter the valid Mobile number !")
        obj.focus();
        return false;
    }
   }

return true;
}

