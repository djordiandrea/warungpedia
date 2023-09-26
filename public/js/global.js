console.log("global js");
var base_url = window.location.origin;

var ajax = {

   ajaxPost: function (url, data, next) {
      $.ajax({
         method: "POST",
         url: base_url + url,
         data: data,
         dataType: "json",
         success: function (response) {
            next(response);
         },
         error: function (request, status, error) {
            alert(error);
         }
      });
   },
   ajaxGet: function (url, data, next) {
      $.ajax({
         method: "POST",
         url: base_url + url,
         data: data,
         dataType: "json",
         success: function (response) {
            next(response);
         },
         error: function (request, status, error) {
            alert(error);
         }
      });
   },
   ajaxPostWithFile: function (url, data, next) {
      $.ajax({
         method: "POST",
         url: base_url + url,
         data: data,
         dataType: "json",
         contentType: false,
         processData: false,
         success: function (result) {
            next(result);
         },
         error: function (request, status, error) {
            alert(error);
         }
      });
   }

}