$(document).ready(function(){
    $('#sendbox').on("submit", function(e){
        e.preventDefault(); //Bloqueia o refresh do form
        var form = $(this);

        $.ajax({
            type:"POST",
            url:"ajax.php",
            data: form.serialize(),
            success: function(data){
                $("#modal").html("<iframe src='"+data+"' style='width: 100%; height: 80vh; border:none;'>Navegador não compatível</iframe>")
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(xhr.status);
            }
        })
    });
});