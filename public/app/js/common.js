/**
 * Created by Lenovo on 2014/12/24.
 */
function getPermission(obj,des,url)
{
    alert('url'+url);
    alert(obj.value);
    return false;
    $.post(
        url,
        {
            grade_id:obj.valueOf()
        },
        function (data) //回传函数
        {
            alert(data);
        }
    );
}
