                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Tambah Bisnis
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo site_url('admin/bisnis/aksi_tambah'); ?>">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" name="nama_konsumen" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Perusahaan</label>
                                                    <input type="text" name="nama_perusahaan" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email </label>
                                                    <input type="text" name="email_konsumen" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Kebutuhan Material</label>
                                                    <textarea name="kebutuhan_konsumen" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alamat </label>
                                                    <textarea name="alamat_konsumen" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default" type="submit">Simpan </button>
                                                    <button onclick="window.history.back()" class="btn btn-default" type="button">Batal </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>