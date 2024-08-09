<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('asset/create/');?>"> 
            Create New Asset
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table table-bordered">
            <tr>
                <th>asset_no</th>
				<th>asset_name</th>
				<th>asset_type</th>
				<th>asset_weight</th>
				<th>asset_desc</th>
				<th>asset_acquired</th>
				<th>active</th>
                <th width="240px">Action</th>
            </tr>
 
            <?php foreach ($assets as $asset) { ?>      
            <tr>
                <td><?php echo $asset->asset_no; ?></td>
                <td><?php echo $asset->asset_name; ?></td>  
				<td><?php echo $asset->asset_type; ?></td>
                <td><?php echo $asset->asset_weight; ?></td>  
				<td><?php echo $asset->asset_desc; ?></td>
                <td><?php echo $asset->asset_acquired; ?></td>  
				<td><?php echo $asset->active; ?></td>
           
                <td>
                    <a
                        class="btn btn-outline-info"
                        href="<?php echo base_url('asset/show/'. $asset->id) ?>"> 
                        Show
                    </a>
                    <a
                        class="btn btn-outline-success"
                        href="<?php echo base_url('asset/edit/'.$asset->id) ?>"> 
                        Edit
                    </a>
                    <a
                        class="btn btn-outline-danger"
                        href="<?php echo base_url('asset/delete/'.$asset->id) ?>"> 
                        Delete
                    </a>
                </td>     
            </tr>
            <?php } ?>
        </table>
    </div>
</div>