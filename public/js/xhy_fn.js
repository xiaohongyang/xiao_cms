/**
 * 元素居中
 * @return {[type]} [description]
 */
!(function($){
    $.fn.pos = function (move, b) { //居中
        b = b || 2;
        var
            $t = $(this),
            t  = ($(window).outerHeight() - $t.outerHeight()) / b + $(window).scrollTop(),
            l  = ($(window).outerWidth() - $t.outerWidth()) / 2,
            ft = ($(window).outerHeight() - $t.outerHeight()) / b;
        // move ? $t.css('position', 'fixed') : $t.css({ top : t, left : l });
        // move ? $t.stop().animate({ top : t, left : l },30) : $t.css({ top : t, left : l });
        move ? $t.css({ top : ft, left : l}) : $t.css({ top : t, left : l });
        ($t.outerHeight() > $(window).outerHeight()) && $t.css({top: 10});
        return this;
    };
})(jQuery);


////////////////////////////////////////datatables begin////////////////////////////////////////

//刷新datatables中的数据
$.fn.fresh_datatables = function(){
    if($.fn.xhy.datatables != undefined){
        $.fn.xhy.datatables.draw(false)
    }
}
////////////////////////////////////////datatables end////////////////////////////////////////

////////////////////////////////////////modal begin////////////////////////////////////////

$.fn.xhy = {
    modal : {
        alert : {

            html : `<!--alert提示弹出窗口 begin-->
                <div class="modal" id="modal-alert" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>`,
            init : function(){
                $('body').append($(this.html))
                this.wrapper = $('#modal-alert')

            },
            wrapper : $('#modal-alert'),
            button : {
                right : {
                    text :  "确定",
                    is_show : true
                }
            },
            modal_title : {
                text : "提示"
            },
            modal_body : {
                text : "提示内容"
            },
            ok_btn : '',
            show : function(content, callback){

                this.init();

                this.ok_btn = this.wrapper.find('button:last')
                this.modal_body.text = content
                this.wrapper.find('.modal-title').html(this.modal_title.text);
                this.wrapper.find('.modal-body').html(this.modal_body.text);
                this.wrapper.find('.modal-footer button').eq(0).hide();
                this.wrapper.find('.modal-footer button:last').html(this.button.right.text);
                let wrapper = this.wrapper
                this.ok_btn.click(function(){
                    wrapper.modal("hide")
                })
                this.wrapper.on('hide.bs.modal', function () {
                    if(callback != undefined){
                        eval(callback)
                    }
                });
                this.do_show()
            },
            do_show : function(){
                this.wrapper.modal("show")
            }

        },
        confirm : {

            html : `<!--confirm框架页弹出窗口 begin-->
                <div class="modal fade" id="modal-confirm" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left btn-ok" data-dismiss="modal">确定</button>
                                <button type="button" class="btn btn-primary btn-cancel">取消</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                
                
                <button type="button" class="btn hide-btn-show-modal-confirm" data-toggle="modal" data-target="#modal-confirm" style="display: none">
                    Launch Default Modal
                </button>
                <!--confirm框架页弹出窗口 end-->`,
            init : function(){
                $('body').append($(this.html))
                this.wrapper = $('#modal-confirm')

            },
            button : {
                right : {
                    text :  "确定",
                    is_show : true
                },
                left : {
                    text : "取消",
                    is_show : true
                }
            },
            modal_title : {
                text : "提示"
            },
            modal_body : {
                text : "提示内容"
            },
            ok_btn : '',
            show : function(content, callback){

                this.init()

                this.ok_btn = this.wrapper.find('button:last')
                this.modal_body.text = content
                this.wrapper.find('.modal-title').html(this.modal_title.text);
                this.wrapper.find('.modal-body').html(this.modal_body.text);
                this.wrapper.find('.modal-footer button').eq(0).html(this.button.left.text)
                this.wrapper.find('.modal-footer button:last').html(this.button.right.text);
                let wrapper = this.wrapper
                let t = this
                this.ok_btn.click(function(){
                    if(callback != undefined){
                        if(typeof callback == "string"){
                            eval(callback)
                        } else if(typeof callback == "function"){
                            callback()
                        }
                    }
                    t.hide()
                    return false
                })
                this.wrapper.on('hide.bs.modal', function () {

                    wrapper.remove();
                    wrapper.nextAll('.modal-backdrop:eq(0)').remove()
                });
                this.do_show()
            },
            do_show : function(){
                this.wrapper.modal("show")
            },
            hide : function(){
                this.wrapper.modal("hide")
            }

        },
        frame : {
            wrapper : $('#modal-frame'),
            button : {
                right : {
                    text :  "确定",
                    is_show : true
                }
            },
            modal_title : {
                text : "提示"
            },
            modal_body : {
                text : "提示内容",
            },
            option : {
                src : "http://baidu.com",
                title : "框架页面"
            },
            ok_btn : '',
            show : function(option){


                this.ok_btn = this.wrapper.find('button:last')
                this.option = $.fn.extend(this.option,option)
                this.modal_body.text = "<iframe src='" + this.option.src + "' style='width: 100%; height: 100%; border:none;' ></iframe> ";
                this.modal_title.text = this.option.title
                this.wrapper.find('.modal-title').html(this.modal_title.text);
                this.wrapper.find('.modal-body').html(this.modal_body.text);
                this.wrapper.find('.modal-footer').hide();

                this.resize_large()
                this.do_show()
                return this
            },

            do_show : function(){
                $('.hide-btn-show-modal-frame').trigger('click')
            },
            resize_large : function(){
                let document_width = $(document).width()
                let document_height = $(document).height()
                this.wrapper.find('.modal-dialog').css({width: document_width * 0.8 + "px", height: document_height * 0.8 + "px"})
                this.wrapper.find('.modal-body').css({height: (document_height * 0.8 - this.wrapper.find('.modal-header').outerHeight()-60)  + "px"})
            }
        },
        hide : function(type){
            type = type==undefined ? 'alert' : type;
            if(type=='alert'){
                if($('#modal-alert')){
                    $('#modal-alert .close', window.top.document).trigger('click')
                }
            } else if(type=='frame'){
                if($('#modal-frame')){
                    $('#modal-frame .close',window.top.document).trigger('click')
                }
            }

        }
    }
}


////////////////////////////////////////modal end////////////////////////////////////////
