<?php
 
class Asset_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
    public function get_all()
    {
        $assets = $this->db->get("tbl_asset")->result();
        return $assets;
    }
 
    /*
        Store the record in the database
    */
    public function store()
    {    
        $data = [
            'asset_no'        => $this->input->post('asset_no'),
			'asset_name'        => $this->input->post('asset_name'),
			'asset_type'        => $this->input->post('asset_type'),
			'asset_weight'        => $this->input->post('asset_weight'),
			'asset_desc'        => $this->input->post('asset_desc'),
			'asset_acquired'        => $this->input->post('asset_acquired'),
            'active' => $this->input->post('active')
        ];
 
        $result = $this->db->insert('tbl_asset', $data);
        return $result;
    }
 
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
        $asset = $this->db->get_where('tbl_asset', ['id' => $id ])->row();
        return $asset;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($id) 
    {
        $data = [
            'asset_no'        => $this->input->post('asset_no'),
			'asset_name'        => $this->input->post('asset_name'),
			'asset_type'        => $this->input->post('asset_type'),
			'asset_weight'        => $this->input->post('asset_weight'),
			'asset_desc'        => $this->input->post('asset_desc'),
			'asset_acquired'        => $this->input->post('asset_acquired'),
            'active' => $this->input->post('description')
        ];
 
        $result = $this->db->where('id',$id)->update('tbl_asset',$data);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('tbl_asset', array('id' => $id));
        return $result;
    }
     
}
?>