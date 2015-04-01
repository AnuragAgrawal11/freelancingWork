function IsValidTime(obj)
{



 re = /^(\d{1,2}):(\d{2})(AM)?$/;

    if(obj.value != '') {
      if(regs = obj.value.match(re)) {
        if(regs[3]) {
          if(regs[1] < 1 || regs[1] > 12) {
            alert("Invalid value for hours: " + regs[1]);
            obj.focus();
            return false;
          }
        } else {
          if(regs[1] > 23) {
            alert("Invalid value for hours: " + regs[1]);
           obj.focus();
            return false;      
          }
        }
        if(regs[2] > 59) {
          alert("Invalid value for minutes: " + regs[2]);
          obj.focus();
          return false;      
        }
      } else {
        alert("Invalid time format: " +obj.value);
      obj.focus();
        return false;
      }
    }
    else


  
    return true;


  }
  
