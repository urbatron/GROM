$(function(){

$('#form').submit(function(e){
var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
var mail = $('#email');
    if(mail.val().search(pattern) == 0){
        $("#red").hide(300);
        $("#green").show("slow");
        e.preventDefault();
    }else{
        $("#green").hide(300);
        $("#red").show("slow");
        e.preventDefault();
        end;
    }

var m_method=$(this).attr('method');
var m_action=$(this).attr('action');
var m_data=$(this).serialize();
$.ajax({
    type: m_method,
    url: m_action,
    data: m_data,
success: function(result){
$('#test_form').html(result);
}
});
});
});









