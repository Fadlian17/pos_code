 <!-- Main content -->
     <section class="content">
     <div class="box">
        <div class = "box-header">
            <h3 class="box-title">Data Pengguna</h3>
            <div class="pull-right">
              <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create 
              </a>
            </div>
        </div>
        
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Level</th>
                        <th>Actions</th>  
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){ ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->level == 1? "admin":"kasir"?></td>
                        <td>
                          <!--aksi update & delete-->
                          <a href="<?=site_url('user/edit/')?>" class="btn btn-warning btn-xs">
                          <i class="fa fa-pen"></i> Edit 
                          </a>
                          <a href="<?=site_url('user/edit/')?>" class="btn btn-danger btn-xs">
                          <i class="fa fa-eraser"></i> Delete 
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
