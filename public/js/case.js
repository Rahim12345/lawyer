$(document).ready(function () {
   $('#caseBtn').click(function () {
       $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
       setTimeout(function () {
           $('#appointment_name').focus();
       },500);
   });
});
