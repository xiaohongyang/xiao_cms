<?php
/**
 * @var \Xiaohongyang\LaravelCmsAdmin\Model\ArticleType $item
 *
 * @var   \Illuminate\Contracts\Pagination\LengthAwarePaginator $paginator
 */
?>
@extends('cms_admin::layout.main')


@section("content")
    <div class="">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">类别列表
                    <a href="javascript:void(0)" data-href="<?=route('article_type.create')?>" class="btn btn-modal-frame"><i class="fa fa-plus"></i></a>
                </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <table id="user-posts-table datatable" class="table datatable table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>标题</th>
                        <th>创建时间</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>

                <table class="table table-bordered" style="display: none;">
                    <tr>
                        <td>
                            id
                        </td>
                        <td>
                            标题
                        </td>
                        <td>
                            创建时间
                        </td>
                        <td>
                            更新时间
                        </td>
                        <td>
                            操作
                        </td>
                    </tr>
                    <?php /*foreach ($paginator as $item) : */?><!--
                    <tr>
                        <td><?/*=$item->id*/?></td>
                        <td><?/*=$item->title*/?></td>
                        <td><?/*=$item->created_at*/?></td>
                        <td><?/*=$item->updated_at*/?></td>
                        <td>
                            <a href="<?/*=route('article_type.edit',['id' => $item->id])*/?>"><span class="fa fa-pencil"></span></a>
                            <a href="<?/*=route('article_type.delete',['id' => $item->id])*/?>"><span class="fa fa-trash"></span></a>
                            <a href="<?/*=route('article_type.detail',['id' => $item->id])*/?>"><span class="fa fa-eye"></span></a>
                        </td>
                    </tr>

                    --><?php /*endforeach; */?>
                </table>


            </div>

        </div>






    </div>


@endsection

@section("js")



    <script type="text/javascript">

        $(function () {



            $.fn.xhy.datatables = $('.datatable').DataTable({
                serverSide: true,
                processing: true,
                ajax: '<?=route("article_type.search")?>',
                //记录最后访问的页码
                //bStateSave : true,
                columns: [
                    {data: 'id'},
                    {data: 'title'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    {data: 'action'},
                    /*{data: 'title', name: 'posts.title'},*/
                ],
                "language": {
                      "processing": "<div class='icon-spinner icon-spin text-center' ><i class='fa-li fa fa-spinner fa-spin' style='position: unset;'></i></div>"
                }
            });
        });
    </script>
@endsection