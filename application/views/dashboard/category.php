<?php echo $this->load->view('templates/head');?>

<?php echo $this->load->view('templates/header');?>

	<div id="page-wrapper">

		<div class = "container">
			<input type = "hidden" id = "hidden-page" value = "category-nav"/>

                <!-- Page Heading -->
                <div class="row" style = "margin-left:0px;margin-right:0px">
                    <div class="col-lg-12" style = "padding:0px">
                        <h1 class="page-header">
                            Categories <small><a href = "#" class = "btn btn-default" id = "add-category"><i class = "fa fa-plus"></i> Add Category</a></small>
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
							<th>Tag</th>
							<th>Options</th>
						</thead>	                		

						<tbody>
							<?php if($categories):?>
								<?php foreach($categories as $category):?>
									<tr>
										<td><?php echo $category->name;?></td>
										<td><?php echo $category->tag;?></td>
										<td class = "t-options">
											<a href = "" class = "edit-category" id = "<?php echo $category->id;?>" name = "<?php echo $category->name;?>" tag = "<?php echo $category->tag;?>" ><i class = "fa fa-edit"></i></a>
											<a href = "<?php echo base_url();?>dashboard/category/delete/<?php echo $category->id;?>" class = "delete-category"><i class = "fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>	
						</tbody>

                	</table>

                </div>
				

		</div>

		<div class="modal fade" id = "category-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Category</h4>
		      </div>
		      <div class="modal-body">
		      	
				<form role="form" method = "POST" action = "<?php echo base_url();?>dashboard/category/add" id = "category-form"> 

				  <div class="form-group">
				    <label class="control-label" >Name</label>
				    <input type="text" class="form-control" id="category-name-text" name = "category-name-text" placeholder="Category Name">
				  </div>

				  <div class="form-group">
				    <label class="control-label" >Tag</label>
				    <input type="text" class="form-control" id="category-tag-text" name = "category-tag-text" placeholder="Category Tag">
				  </div>

				</form>
	      		
		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "category-save">Save</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	

		<div class="modal fade" id = "edit-category-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Category</h4>
		      </div>
		      <div class="modal-body">
		      	
				<form role="form" method = "POST" action = "<?php echo base_url();?>dashboard/category/edit" id = "edit-category-form"> 

				  <div class="form-group">
				    <label class="control-label" >Name</label>
				    <input type = "hidden" name = "category-id" id = "category-id" />
				    <input type="text" class="form-control" id="edit-category-name-text" name = "category-name-text" placeholder="Category Name">
				  </div>

				  <div class="form-group">
				    <label class="control-label" >Tag</label>
				    <input type="text" class="form-control" id="edit-category-tag-text" name = "category-tag-text" placeholder="Category Tag">
				  </div>

				</form>
	      		
		      </div>
		      <div class="modal-footer">
		      	<a class = "btn btn-primary" id = "edit-category-save">Save</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	

		<div class="modal fade" id = "delete-modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style = "background-color:#101010;color:#FFFFFF">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Delete Category</h4>
		      </div>
		      <div class="modal-body">
		      	
	      		<div class="alert alert-warning" role="alert">
      				<strong>Warning!</strong> Are you sure you want to delete this Category?.
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

				    $("#category-tag-text").keydown(function(event) {
				        if (event.keyCode == 32) {
				            event.preventDefault();
				        }
				    });

			    	$(document).ready(function(){

			    		$('#add-category').on('click',function(e){
			    			e.preventDefault();

			    			$('#category-modal').modal('show');
			    		});
			    	
			    		$('#category-save').on('click',function(e){
			    			e.preventDefault();
			    			var name = $('#category-name-text').val();
			    			var tag = $('#category-tag-text').val();
			    			
			    			if(name == "" && tag == "")
			    			{
			    				alert("all fields are required");
			    			}
			    			else
			    			{
			    				$('#category-form').submit();	
			    			}
			    		});
			    	
				    	$('.edit-category').on('click',function(e){
				    		e.preventDefault();

				  			$('#category-id').val($(this).attr('id'));
				    		$('#edit-category-name-text').val($(this).attr('name'));
				    		$('#edit-category-tag-text').val($(this).attr('tag'));

				    		$('#edit-category-modal').modal('show');

				    	});

				    	$('#edit-category-save').on('click',function(e){
				    		e.preventDefault();

				    		if($('#edit-category-name-text') == "" && $('#edit-category-tag-text') == "")
				    		{
				    			alert("all fields are required");
				    		}
				    		else
				    		{
				    			$('#edit-category-form').submit();
				    		}
				    	});

			    		$('.delete-category').on('click',function(e){
			    			e.preventDefault();

			    			$('#delete-portfolio').attr('href',$(this).attr('href'));

			    			$('#delete-modal').modal('show');
			    		});

			    	});

			   </script>


<?php echo $this->load->view('templates/footer');?>