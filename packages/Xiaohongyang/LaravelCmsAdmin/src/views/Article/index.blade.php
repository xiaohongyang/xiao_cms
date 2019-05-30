@extends('cms_admin::layout.main')


@section("content")
	<div class="box-body">



		<table id="example" class="display" style="width:100%">
			<theader>
				<tr>
					<th>id</th>
					<th>title</th>
				</tr>

			</theader>
			<tbody>

			</tbody>

		</table>


		<script type="text/javascript">

            $(document).ready(function(){
                $('#example').DataTable( {
                    "ajax": "/json.js",
                    "columns": [
                        { "data": "id" },
                        { "data": "title" },
                    ]
                });
            });


		</script>
	</div>
@endsection