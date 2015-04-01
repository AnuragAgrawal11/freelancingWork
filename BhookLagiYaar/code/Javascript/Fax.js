// JScript File
function IsFaxValid(obj)
{
   if(obj.value!="")
    {
        if(isNaN(obj.value))
        {
            return false;
        }
        else if(obj.value.length<8 || obj.value.length>15)
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

