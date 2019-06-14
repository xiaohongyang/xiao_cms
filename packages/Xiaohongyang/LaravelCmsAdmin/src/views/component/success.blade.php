@extends('cms_admin::layout.main_no_layout')

<style type="text/css">

    #modal-alert{
        background: #eee !important;
    }
</style>

@section("content")
    <div class="box box-primary">
        <div class="box-body">
        </div>
    </div>

@endsection

@section("js")
    <script type="text/javascript">

        $(function(){
            var content = '<?=\Illuminate\Support\Facades\Session::has("message") ? \Illuminate\Support\Facades\Session::get("message") : ''?>'
            var modal_ok_callback = `<?=\Illuminate\Support\Facades\Session::has("modal_ok_callback") ? \Illuminate\Support\Facades\Session::get("modal_ok_callback") : ''?>`
            if (content.length > 0) {
                $.fn.xhy.modal.alert.show(content, modal_ok_callback)
            }
        })

    </script>
@endsection