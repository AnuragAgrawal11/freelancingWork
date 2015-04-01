function IsNumericWithLength(obj,lenght,mess)
{
    var digits="0123456789";
   
    var temp;
    
    if(obj.value !="")
    {
        for (var i=0;i<obj.value.length;i++)
            {
                temp=obj.value.substring(i,i+1);
                if (digits.indexOf(temp)==-1)
                    {
                        alert(mess);
                        obj.focus();
                        return false;
                     }
            }
            if(obj.value.length!=lenght)
{
                        alert('Length can be '+lenght+' digits only');
                        obj.focus();
                        return false;

}
  
    }
  
 return true;   
}
