 <!-- Main content -->
 <section class="content">

     <div class="box">
        <div class = "box-header">
            <h3 class="box-title">Tambah Pengguna</h3>
            <div class="pull-right">
              <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
              <i class="fas fa-undo-alt"></i> Back
              </a>
			</div>
        </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
						<?php //echo validation_errors(); ?>
                        <form action="" method="post">
                            <div class="form-group <?=form_error('fullname')? 'has-error' : null?>">
                                <label>Name *</label>
								<input type="text" name="fullname" class="form-control" value="<?=set_value('fullname')?>" placeholder="name">
								<?=form_error('fullname')?>
                            </div>
                            <div class="form-group <?=form_error('username')? 'has-error' : null?>">
                                <label>Username *</label>
								<input type="text" name="username" class="form-control" value="<?=set_value('username')?>" placeholder="username">
								<?=form_error('username')?>
                            </div>
                            <div class="form-group <?=form_error('password')? 'has-error' : null?>">
                                <label>Password *</label>
								<input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="***">
								<?=form_error('password')?>
                            </div>
                            <div class="form-group <?=form_error('passconf')? 'has-error' : null?>">
                                <label>Password Confirmation *</label>
								<input type="password" name="passconf" class="form-control" value="<?=set_value('passconf')?>" placeholder="***">
								<?=form_error('passconf')?>
                            </div>
                            <div class="form-group">
                                <label>Address </label>
								<textarea name="address" value="<?=set_value('address')?>" class="form-control"></textarea>
								<?=form_error('address')?>
                            </div>
                            <div class="form-group <?=form_error('level')? 'has-error' : null?>">
                                <label>Level*</label>
                                <select name="level" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="1" <?=set_value('level') == 1? "selected" :null?>>Admin</option>
                                    <option value="2" <?=set_value('level') == 2? "selected" :null?>>Kasir</option>
								</select>
								<?=form_error('level')?>
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
