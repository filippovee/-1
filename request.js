
$(document).ready(function(){

    var add = '';

    var val = $('#add_obj').val();

    $('#form1_submit').click(function(){
        //console.log ('Send');
       $.ajax({
            type: 'POST',
            url: 'router.php',
            data: { path: 'create',
                    value: val },
            success:
           function(ans){
                console.log (ans);
            }
        });
    })

});
