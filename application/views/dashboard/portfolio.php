<?php echo $this->load->view('templates/head');?>

<?php echo $this->load->view('templates/header');?>

	<div id="page-wrapper">

		<div class = "container">
			<input type = "hidden" id = "hidden-page" value = "portfolio-nav"/>

                <!-- Page Heading -->
                <div class="row" style = "margin-left:0px;margin-right:0px">
                    <div class="col-lg-12" style = "padding:0px">
                        <h1 class="page-header">
                            Portfolios <small><a href = "<?php echo base_url();?>dashboard/portfolio/add" class = "btn btn-default"><i class = "fa fa-plus"></i> Add Portfolio</a></small>
                        </h1>
                        <!--
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i>Blogs
                            </li>
                        </ol>
                    	-->
                    </div>
                </div>
                <!-- /.row -->

				             
                <div class = "row" style = "margin-left:0px;margin-right:0px">

                	<table id = "blog-table" class = "table table-bordered">

						<thead style = "color:#221517;background-color:#FFFFFF">
							<th>Name</th>
							<th>Category</th>
							<th>Options</th>
						</thead>	                		

						<tbody>
							<?php if($works):?>
								<?php foreach($works as $work):?>
									<tr>
										<td><?php echo $work->name;?></td>
										<td><?php echo $work->cname;?></td>
										<td class = "t-options">
											<a href = "<?php echo base_url();?>dashboard/portfolio/edit/<?php echo $work->id;?>" ><i class = "fa fa-edit"></i></a>
											<a class = "work-delete" href = "<?php echo base_url();?>dashboard/portfolio/delete/<?php echo $work->id;?>" ><i class = "fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>	
						</tbody>

                	</table>

                </div>
				

		</div>

		<div class="modal fade" id = "delete-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Delete Portfolio</h4>
		      </div>
		      <div class="modal-body">
		      	
	      		<div class="alert alert-warning" role="alert">
      				<strong>Warning!</strong> Are you sure you want to delete this Portfolio?.
    			</div>

		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "delete-portfolio" href = "#">Delete</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	

	</div>
			    <script type = "text/javascript" charset="utf-8">
			    	$(function(){
						$('#blog-table').dataTable();			    		
			    	
						var hidden = $('#hidden-page').val();

						$('#'+ hidden).addClass('active');		


			    	});

			    	$(document).ready(function(){

			    		$('.work-delete').on('click',function(e){
			    			e.preventDefault();

			    			$('#delete-portfolio').attr('href',$(this).attr('href'));

			    			$('#delete-modal').modal('show');
			    		});

			    	});

			   </script>


<?php echo $this->load->view('templates/footer');?>