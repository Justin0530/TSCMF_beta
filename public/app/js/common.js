/**
 * Created by Lenovo on 2014/12/24.
 */
function getPermission(obj,des,url)
{
    alert('url'+url);
    alert(obj.value);

    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data:{param:obj.value},
        success: function(data){
            $('#ipt_'+des).empty(); //清空resText里面的所有内容
            $('#ipt_'+des).append("<option value='0'>请选择</option>");
            $.each(data, function(i, item) {
                $('#ipt_'+des).append("<option value='"+i+"'>"+item+"</option>");
            });
        }
    });
}
