<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('asset');?>"> 
            View All Assets
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('asset/store');?>" method="POST">
            <div class="form-group">
                <label for="asset_no">Asset_no</label>
                <input type="text" class="form-control" id="asset_no" name="asset_no">
            </div>
            <div class="form-group">
                <label for="asset_name">Asset_name</label>
                <textarea class="form-control" id="asset_name" rows="3" name="asset_name"></textarea>
            </div>
			
			<div class="form-group">
                <label for="asset_type">Asset_type</label>
                <textarea class="form-control" id="asset_type" rows="3" name="asset_type"></textarea>
            </div>
			
			<div class="form-group">
                <label for="asset_weight">Asset_weight</label>
                <textarea class="form-control" id="asset_weight" rows="3" name="asset_weight"></textarea>
            </div>
			
			<div class="form-group">
                <label for="asset_desc">Asset_desc</label>
                <textarea class="form-control" id="asset_desc" rows="3" name="asset_desc"></textarea>
            </div>
			
			<div class="form-group">
                <label for="asset_acquired">Asset_acquired</label>
                <textarea class="form-control" id="asset_acquired" rows="3" name="asset_acquired"></textarea>
            </div>
			
			<div class="form-group">
                <label for="active">Active</label>
                <textarea class="form-control" id="active" rows="3" name="active"></textarea>
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Save Asset</button>
        </form>
       
    </div>
</div>