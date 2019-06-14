@extends('cms_admin::layout.main_no_layout')


@section("content")
    <div class="box-body">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Monthly Recap Report</h3>

            </div>
            <div class="box-body">

                <?php echo form($form)?>

            </div>

        </div>


    </div>

@endsection