<?php echo $this->load->view('templates/head');?>

<?php echo $this->load->view('templates/header');?>

	<div id="page-wrapper">

		<div class = "container">
			<input type = "hidden" id = "hidden-page" value = "portfolio-nav"/>

                <!-- Page Heading -->
                <div class="row" style = "margin-left:0px;margin-right:0px">
                    <div class="col-lg-12" style = "padding:0px">
                        <h1 class="page-header">
                            Edit Portfolio
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
					<div class = "col-lg-12" style = "padding:0px">
						
						<form role="form" action = "<?php echo base_url();?>dashboard/portfolio/edit_validate" method = "POST" enctype="multipart/form-data">

						  <div class="form-group">
						    <label class="control-label">Name</label>
						    <input type="text" class="form-control" id="portfolio-name" name = "portfolio-name" placeholder="Portfolio Name" value = "<?php echo $works[0]->name;?>">
						  	<input type = "hidden" value = "<?php echo $id;?>" name = "work-id">
						  	<input type = "hidden" value = "<?php echo $works[0]->cover;?>" name = "work-cover">
						  </div>

						  <div class="form-group">
						    <label class="control-label">Category</label>
						    <select class = "form-control" id = "category" name = "category">
						    	<?php if($categories):?>
						    		<?php foreach($categories as $category):?>
						    			<option value = "<?php echo $category->id;?>"><?php echo $category->name;?></option>
						    		<?php endforeach;?>
						    	<?php endif;?>
						    </select>
						  </div>

						  <div class="form-group">
						    <label class="control-label" for="exampleInputFile">Cover</label>
						    <input type="file" id="exampleInputFile" name = "userfile" size = "20">
						    
						  </div>


						  <button type="submit" class="btn btn-default">Edit Portfolio</button>
						</form>						
					</div>
				</div>

		</div>

			    <script type = "text/javascript" charset="utf-8">
			    	var category = "<?php echo $works[0]->category_id?>";

			    	$('#category option[value="'+category+'"]').attr('selected','selected');

			    	$(function(){		    		
			    	
						var hidden = $('#hidden-page').val();

						$('#'+ hidden).addClass('active');		


			    	});

			   </script>


<?php echo $this->load->view('templates/footer');?>