/**
 * Created by Lenovo on 2014/12/24.
 */
function getPermission(obj,des,url)
{

    $.ajax({
        type: "POST",
        url:  url,
        dataType: "json",
        data:{param:obj.value},
        success: function(data){
            alert(data);
            $('#ipt_'+des).empty(); //清空resText里面的所有内容
            alert('#ipt_'+des);
            $('#ipt_'+des).append("<option value='0'>请选择</option>");
            $.each(data, function(i, item) {
                alert(i+'====='+item);
                $('#ipt_'+des).append("<option value='"+i+"'>"+item+"</option>");
            });
        }
    });
}
