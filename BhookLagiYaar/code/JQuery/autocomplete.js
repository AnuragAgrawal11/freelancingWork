$(document).ready(function () {


      var EmployeeViewModel = function () {

          var self = this;
          self.SelectedCityId = ko.observable('');

          var AreaData = {
                SelectedCityId: self.SelectedCityId
          };
         
      };

      window.vm = new EmployeeViewModel();
      ko.applyBindings(vm);


      //City textbox Autocomplete init
      $(".autosuggest").autocomplete({



          source: function (request, response) {

           $.getJSON(ServerBaseUrl + "AreaListing?prifix=" + document.getElementById('txtselectarea').value, null,
              function (data) {
                 response($.map(data, function (item) {
                          return { label: item.area_name, val: item.area_id };
                          }));
              });



//              $.ajax({
//                  type: "POST",
//                  contentType: "application/json; charset=utf-8",
//                  url: "ServerBaseUrl "+ AreaListing,
//                  data: "{'prifix':'" + document.getElementById('txtselectarea').value + "'}",
//                  dataType: "json",
//                  success: function (data) {
//                      response($.map(data, function (item) {
//                          return { label: item.area_name, val: item.area_id };
//                      }));
//                  },
//                 
//              });
          },
          select: function (event, ui) {
              vm.SelectedCityId(ui.item.val);
          }
      });
  });