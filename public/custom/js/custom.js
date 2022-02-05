function addTime(data, ready) {

    // add additional data
    data.meta.now = Date.now();

    // continue saving the data
    ready(data);

}

$(document).on("change","#imgfile",function(){
    $("#cat_image").val($(this).val());
    console.log($("#cat_image").val());
});


$(document).on("change","#imgfile",function(){
    
});