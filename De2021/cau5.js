function listSLBD(SOLAN){
    $.ajax({
        url: 'listSLBD.php',
        type: 'POST',
        data:{
            SOLAN: SOLAN
        },
        success: function (result){
            console.log(result);
            $('#table1').html(result);
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}