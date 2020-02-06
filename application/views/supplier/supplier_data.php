 <!-- Main content -->
 <section class="content">
     <div class="box">
        <div class = "box-header">
            <h3 class="box-title">Data Pemasok Barang</h3>
            <div class="pull-right">
              <a href="<?=site_url('supplier/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create 
              </a>
            </div>
        </div>
        
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
						<th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Decription</th>
                        <th>Actions</th>  
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){ ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
						<td><?=$data->description?></td>
                        <td class="text-center" width="160px">
						  <!--aksi update & delete hak akses-->
                          	<a href="<?=site_url('supplier/delete/'.$data->supplier_id)?>" class="btn btn-danger btn-xs">
                          	 <i class="fa fa-trash"></i> Delete
                          	</a>
						  
                        </td>
                    </tr>
                <?php
                }?>
                </tbody>
            </table>
        
        </div>
        </div>
      </div>
     </section>
