$(document).ready(function(){
  //alert('come here');
    // Add Class
    $(".categorydd").on("change",function(e){
      var id = this.id;
      var split_id = id.split("_");
      var field_name = split_id[0];
      var edit_id = split_id[1];
      var value = $(this).val();
        $.ajax({
           url: 'update-ent-inner.php',
           type: 'post',
             data: {field:field_name, value:value, id:edit_id},
           success:function(response){
               console.log('Save successfully');
           }
       });
    });

    $('.textdd').click(function(){
        $(this).addClass('editMode');
    });
    // Save data
    $(".textdd").focusout(function(){
        $(this).removeClass("editMode");
        var id = this.id;
        var split_id = id.split("_");
        var field_name = split_id[0];
        var edit_id = split_id[1];
        var value = $(this).val();
        //alert(value);
        $.ajax({
            url: 'update-ent-inner.php',
            type: 'post',
            data: {field:field_name, value:value, id:edit_id},
            success:function(response){
                console.log('Save successfully');
            }
        });
    });
});
