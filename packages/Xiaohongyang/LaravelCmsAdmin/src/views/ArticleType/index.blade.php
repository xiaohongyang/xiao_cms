<?php
/**
 * @var  \Xiaohongyang\LaravelCmsAdmin\Model\ArticleType
 */
$item;
?>
@extends('cms_admin::layout.main')


@section("content")
    <div class="box-body">

        <?php

            /**
             * @var   \Illuminate\Contracts\Pagination\LengthAwarePaginator
             */
            //$paginator;
        ?>


            <table class="table table-bordered">

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

                <?php foreach ($paginator as $item) {

                /**
                 * @var \Xiaohongyang\LaravelCmsAdmin\Model\ArticleType
                 */
                $item;
                ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td><?=$item->title?></td>
                        <td><?=$item->created_at?></td>
                        <td><?=$item->updated_at?></td>
                        <td>
                            <a href="#"><span class="fa fa-pencil"></span></a>
                            <a href="#"><span class="fa fa-trash"></span></a>
                            <a href="#"><span class="fa fa-eye"></span></a>
                        </td>
                    </tr>

                <?php } ?>
            </table>


    </div>


    {{ $paginator->links() }}
@endsection