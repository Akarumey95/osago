$(document).ready(function () {
    $('#autoMark').change(function () {
       var id = $(this).val();
       $.ajax({
           type: "POST",
           url: "php/getData.php",
           data: {id: id, action: "getModel"},
       }).done(function (data) {
           alert("test");
       })
    });
});