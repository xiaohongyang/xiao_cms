



$('body').on('click', '.btn-modal-frame', function(){

    //展示弹出iframe框架页
    var href= $(this).attr('data-href')
    var title= $(this).attr('data-title')
    console.log(href)
    $.fn.xhy.modal.frame.show({src : href, title : title})
})

$('body').on('click', '.btn-delete', function(){

    //展示弹出iframe框架页
    var href= $(this).attr('data-href')
    var obj_name= $(this).attr('data-obj-name')

    var do_ajax_delete = (callback) => {
        $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : href,
            method : "post",
            data : {},
            dataType : 'JSON',
            success : function(json){

                if(callback != undefined){
                    if(typeof callback == "string"){
                        eval(callback)
                    } else if(typeof callback == "function"){
                        callback()
                    }
                }
                if(json.status == 1){
                    $.fn.xhy.datatables.draw(false)
                    console.log('delete result:', json)
                } else {
                    $.fn.xhy.modal.alert.show(json.message ? json.message : '操作失败');
                }
            },
            error : function(json){
                console.log(json)
                let message = json.responseJSON.message
                console.log(message)
                $.fn.xhy.modal.alert.show(message ? message : '操作失败');
            }
        })
    }

    $.fn.xhy.modal.confirm.show("确定要删除吗", function(){do_ajax_delete("$.fn.xhy.modal.confirm.hide()")})
})

