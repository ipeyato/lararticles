$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.article_link').click(function(e){
    e.preventDefault();
    $.ajax({
      url:'/articles',
      type:"GET",
      dataType: "json",
      success: function (data)
      {
        $('.panel-body').html(data["view"]);
      },
      error: function (xhr, status)
      {
        console.log(xhr.error);
      }
    });
  });