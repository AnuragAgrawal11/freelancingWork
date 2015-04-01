// JScript File
function IsBlank(obj,mess)
{   
    if((obj.value).replace(/^\s*|\s*$/g,'')==null || (obj.value).replace(/^\s*|\s*$/g,'')=="" || (obj.value).replace(/^\s*|\s*$/g,'')=="")
    {
        alert(mess);
        obj.focus();
        return false;
    }
 return true;   
}
