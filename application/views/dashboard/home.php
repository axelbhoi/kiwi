<?php echo $this->load->view('templates/head');?>

<?php echo $this->load->view('templates/header');?>

	<div id="page-wrapper">

		<div class = "container">
			<input type = "hidden" id = "hidden-page" value = "home-nav"/>

                <!-- Page Heading -->
                <div class="row" style = "margin-left:0px;margin-right:0px">
                    <div class="col-lg-12" style = "padding:0px">
                        <h1 class="page-header">
                            Images
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
							<th>Image</th>
							<th>Options</th>
						</thead>	                		

						<tbody>
							<?php if($images):?>
								<?php foreach($images as $image):?>
									<tr>
										<td><?php echo $image->tag;?></td>
										<td class = "t-options">
											<a class = "btn-images" href = "#" id = "<?php echo $image->id;?>" image = "<?php echo $image->name;?>" ><i class = "fa fa-edit"></i></a>
										</td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>	
						</tbody>

                	</table>

                </div>


		</div>

		<div class="modal fade" id = "image-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Category</h4>
		      </div>
		      <div class="modal-body">
		      	
				<form role="form" method = "POST" action = "<?php echo base_url();?>dashboard/image" id = "image-form" enctype="multipart/form-data"> 

					<div class="form-group">
						<input type = "hidden"  id = "image-id" name = "image-id" />
						<input type = "hidden"  id = "image-cover" name = "image-cover" />
						<label class="control-label" >Image</label>
					    <input type="file" class="form-control" id="userfile" size = "20" name = "userfile" />
					</div>

				</form>
	      		
		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "image-save">Save</a>
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

						$('.btn-images').on('click',function(e){
							e.preventDefault();
							
							$('#image-id').val($(this).attr('id'));
							$('#image-cover').val($(this).attr('image'));

							$('#image-modal').modal('show');
						});

						$('#image-save').on('click',function(e){
							$('#image-form').submit();
						});

			    	});


			   </script>


<?php echo $this->load->view('templates/footer');?>