 function IsEmailValidte(obj) {
                      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    
                     
                    if(reg.test(obj.value) == false) {
                   alert('Invalid Email Address');
                     return false;
                      }
                     
                       else
                      return true;
                      }
                    