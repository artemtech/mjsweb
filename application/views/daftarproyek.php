        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Proyek</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters
                                    </button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#tambahData">
                                        <i class="zmdi zmdi-plus"></i>tambah data
                                    </button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th>nama proyek</th>
                                        <th>nama klien</th>
                                        <th>kategori</th>
                                        <th>fee</th>
                                        <th>deadline</th>
                                        <th>nama pegawai</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=0;
									foreach ($proyek as $p) {
										$i++;
										?>
										<tr class="tr-shadow">
											<td><?= $i.'.' ?></td>
											<td><?= $p->namaProyek ?></td>
											<td><?= $p->namaKlien ?></td>
											<td><?= $p->namaKategori ?></td>
											<td><?= $p->fee ?></td>
											<td><?= $p->deadline ?></td>
											<td><?= $p->first_name . ' ' . $p->last_name ?></td>
											<td>
												<div class="table-data-feature">
													<button class="item"
															title="Edit" data-toggle="modal"
															data-target="#editData-<?= $p->idProyek ?>">
														<i class="zmdi zmdi-edit"></i>
													</button>
													<button class="item" data-toggle="tooltip" data-placement="top"
															title="Delete"
															onclick="window.location.href='<?= base_url() . "daftarproyek/hapus/" . $p->idProyek ?>'">
														<i class="zmdi zmdi-delete"></i>
													</button>
													<button class="item" data-toggle="tooltip" data-placement="top"
															title="More">
														<i class="zmdi zmdi-more"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr class="spacer"></tr>
										<?php
									}
									unset($p);
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        <!-- modal create -->
        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Static</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Proyek</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama-input" class=" form-control-label">Nama Klien</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama-input" name="nama-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Masukkan nama klien </small>
                                </div>
                            </div> 
                                <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama-input" class=" form-control-label">kategori</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama-input" name="nama-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Masukkan kategori proyek </small>
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama-input" class=" form-control-label">fee</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama-input" name="nama-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Masukkan fee </small>
                                </div>
                            </div>
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama-input" class=" form-control-label">deadline</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="tanggal-input" id="nama-input" name="nama-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Masukkan tanggal deadline </small>
                                </div>
                            </div>
                               <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama-input" class=" form-control-label">nama pegawai</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama-input" name="nama-input" placeholder="" class="form-control">
                                    <small class="form-text text-muted">Masukkan nama pegawai yang melayani</small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal create -->
