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

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="username" class="form-control" placeholder="***">
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation *</label>
                                <input type="password" name="username" class="form-control" placeholder="***">
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <textarea name="fullname" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Level*</label>
                                <select name="level" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Kasir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                        <i class="fa fa-paper-line"></i>Save
                                </button>
                                <button type="Reset" class="btn btn-danger btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>