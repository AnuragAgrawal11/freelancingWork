// JScript File

function IsPincodeValid(obj)
{
   if(obj.value!="")
    {
        if(isNaN(obj.value))
        {
            return false;
        }
        else if(obj.value.length<6 || obj.value.length>6)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

return true;
}
