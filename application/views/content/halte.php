
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.css" />
	<style>
	.fixed-table-toolbar{
		padding-left:10px !important;
		padding-right:10px !important;
	}		
	</style>	
	<script type="text/javascript">
		var SITE_URL = '<?php echo site_url();?>';
	</script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#grid_halte').bootstrapTable({
				toolbar:'#toolbar',
				search:true,
				url: SITE_URL+'halte/get_json/',
				column:[
				],
				onLoadSuccess:function(e){
					$('#total_record').html(e.total);
					$('.fixed-table-pagination').addClass('panel-footer clearfix bg-gray-active');
				},
				onCheck:function(row){
					enable_btn();
				},
				onUncheck:function(row){
					disable_btn();
				}				
				});
		});
	</script>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-tags"></i>&nbsp;Daftar Halte
					</div>
					<table id="grid_halte"
								data-show-refresh="true"
								data-show-export="true"
								data-classes="table table-no-bordered table-responsive"
								
								data-pagination="true"
								data-id-field="KEY"
								data-page-list="[10, 25, 50, 100, ALL]"
								data-side-pagination="server"
								data-response-handler="responseHandler">
					</table>
				</div>
			</div>
		</div>