// JScript File
function IsPhoneValid(obj)
{
   if(obj.value!="")
   {
     if(obj.value.length<8 || obj.value.length>15)
    {
        //alert("Enter the valid contact number !")
        obj.focus();
        return false;
    }
   }

return true;
}

