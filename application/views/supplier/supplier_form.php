 <!-- Main content -->
 <section class="content">

     <div class="box">
        <div class = "box-header">
            <h3 class="box-title">Tambah Supplier</h3>
            <div class="pull-right">
              <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
              <i class="fas fa-undo-alt"></i> Back
              </a>
			</div>
        </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('supplier/process')?>" method="post">
                            <div class="form-group <?=form_error('fullname')? 'has-error' : null?>">
                                <label>Name *</label>
								<input type="text" name="fullname" class="form-control" value="<?=set_value('fullname')?>" placeholder="name" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
								<i class="fas fa-paper-plane"></i> Save
                                </button>
                                <button type="Reset" class="btn btn-default btn-flat">
								<i class="fas fa-step-backward"></i> Reset
								</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
