

var ServerBaseUrl = "http://bhooklagiyaar.com/Authentication.svc/";

//function checkLogin() {
//    $.getJSON(ServerBaseUrl + "/login", null,
//        function (data) {
//            if (data.loginResult == '') {
//                callback();
//            } 
//            else 
//            {
//                
//            }
//        });

      function initsingup() {
          // ko.validation.init({ messageTemplate: '<img src="../Image/no.png" />' });

          var RegisterViewModel = function () {

              var self = this;
              self.Username = ko.observable('Name').extend({ required: { message: '*'} });
              self.Password = ko.observable('Password').extend({ required: { message: '*'} }); ;
              self.mobile = ko.observable('Mobile Number').extend({ required: { message: '*'} });
              self.email = ko.observable('E-mail Id').extend({ email: { message: 'Invalid email.'} });
              self.Address = ko.observable('Shipping Address');
              self.LandMark = ko.observable('Landmark');
              self.PinCode = ko.observable('Pincode');
              var user = {
                  Username: self.Username,
                  Password: self.Password,
                  mobile: self.mobile,
                  email: self.email,
                  Address: self.Address,
                  LandMark: self.LandMark,
                  PinCode: self.PinCode
              };

              self.errors = ko.validation.group(this, { deep: true, observable: false });
              self.save = function () {
                  if (self.errors().length > 0) {
                      self.errors.showAllMessages();
                      return;
                  }

                  $.getJSON(ServerBaseUrl + "SignUp?user=" + ko.toJSON(user), null,
              function (data) {
                  if (data.SignUpResult == 1) {
                      ko.applyBindings(new RegisterViewModel(), document.getElementById('reg'));
                      $('#regerror').html('');
                      window.location = window.parent.location;
                  }
                  else {
                      $('#regerror').html('Email id already register with us!!!');
                  }
              });
              };
          };

      ko.applyBindings(new RegisterViewModel(), document.getElementById('reg'));


      var loginViewModel = function () {

          var self = this;
          self.email1 = ko.observable('E-mail Id').extend({ email: { message: 'Invalid email.'} });
          self.Password1 = ko.observable('Password').extend({ required: { message: '*'} });
          var login = {
              Email: self.email1,
              Password: self.Password1
          };

          self.errors = ko.validation.group(this, { deep: true, observable: false });
          self.login = function () {
              if (self.errors().length > 0) {
                  self.errors.showAllMessages();
                  return;
              }

              $.getJSON(ServerBaseUrl + "SignIn?login=" + ko.toJSON(login), null,
             function (data) {
                 if (data.SignInResult == 1) {
                     ko.applyBindings(new loginViewModel(), document.getElementById('lin'));
                     $('#errormsg').html('');
                     window.location = window.parent.location;
                 }
                 else {
                     $('#errormsg').html('email id or passowrd is incorrect!!!');

                 }

             });
          };
      };


      ko.applyBindings(new loginViewModel(), document.getElementById('lin'));
  }

