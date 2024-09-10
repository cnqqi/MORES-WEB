$(document).ready(function(){   
    $("#beranda502").click(function(){
        $("#hasil502").load("beranda502.php");
    });

    $("#galleri502").click(function(){
        $("#hasil502").load("galleri502.php");
    });

    $("#review502").click(function(){
        $("#hasil502").load("review502.php");
    });
});

$("#oplogo502").change(function(){
    if ($("#oplogo502").val() == "uk2"){
        $("#logo502").removeClass("logoz502");
        $("#logo502").addClass("logo502");  
    }
    else {
    $("#logo502").removeClass("logo502");
    $("#logo502").addClass("logoz502");;
    }
    });

$("#kolom502").change(function(){
    if ($("#kolom502").val() == "3k"){

        $("#gambar502").removeClass("row-cols-4");
        $("#gambar502").addClass("row-cols-3");
        $("#gambar502").removeClass("row-cols-6");
    }
    else if ($("#kolom502").val() == "1k"){
        $("#gambar502").addClass("row-cols-12");
        $("#gambar502").removeClass("row-cols-3");
        $("#gambar502").removeClass("row-cols-6");

    }
    else {
    $("#gambar502").removeClass("row-cols-6");
    $("#gambar502").addClass("row-cols-4");
    $("#gambar502").removeClass("row-cols-12");
    }
});


$('#formReview502').submit(function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        type: 'GET',
        url: 'proses502.php',
        data: formData,
        success: function(response){
            $('#tabelReview502 tbody').append(response);
            $('#nama502').val('');
            $('#review502').val('');
        }
    });
});


$("#searchInput502").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabelReview502 tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});