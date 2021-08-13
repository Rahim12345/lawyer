$(document).ready(function () {
   $('#searchBtn').click(function () {
       let word = $('#search-word').val();
       if (word.length < 3)
       {
           return;
       }

       $('#searchList').html('');
       $('#searchForm').css('margin-bottom','0');
       getSearchResults(word);
   });

   function getSearchResults(word) {
       $.ajax({
            type : 'POST',
            data : { word},
            url  : $('#searchUrl').val(),
            success : function (response) {
                $('#searchList').html('').html(response);
            },
            error : function (myErrors) {
                $.each(myErrors.responseJSON.errors, function (key, value) {
                   console.log(value);
                })
            }
       });
   }
});
