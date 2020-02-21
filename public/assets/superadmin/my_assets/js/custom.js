 $(document).ready(function ()
{
    // $('.del_btn').click(function(){
    //     var url  = $(this).data('href');
    //     var id  = $(this).data('id');

    //     swal.fire({title:'Are You Sure Delete This Data', icon:'warning', buttons:true, dangerMode:true, })
    //     .then((willDelete) => {
    //       if(willDelete)
       //      {
       //          location.replace(url);
       //      }
    //     });
    // });

    $('.del_btn').click(function() 
    {
        var url  = $(this).data('href');
        // var id  = $(this).data('id');

        Swal.fire({ title: "DELETE!",
        text: "Are You Sure Delete This Data?",
        type: "warning", 
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: !1 })
        .then((result) => {
            if(result.value)
                {
                    window.location.replace(url);
                }
        });
         
    });
});