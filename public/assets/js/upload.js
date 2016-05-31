$('#loading').click(function () {
    $('#thumb_upload').click();
});
var opts={
    url:"/admin/upload",
    type:"POST",
    success: function (result, status, xhr) {
        // console.log(result);
        if(result.status=='0'){
            alert(result.info);
        }
        $("input[name='thumb']").val(result.info);
        $("#img_show").attr('src', result.info);
    },
    error: function (result, status, errorThrown) {
        alert('文件上传失败');
    }
};
$('#thumb_upload').fileUpload(opts);