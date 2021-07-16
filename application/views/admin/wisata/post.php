<div ng-controller="tambahWisataController">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Tambah Wisata</h3>
                    <div class="card-tools">
                        <a href="<?=base_url('admin/wisata')?>" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" ng-submit="save(model)" name="form">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Wisata</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" ng-model="model.nama"
                                    placeholder="Nama Wisata" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lat" class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="lat" ng-click="showMap()"
                                    ng-model="model.latitude" placeholder="Click here..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="long" class="col-sm-2 col-form-label">Longitude</label>
                            <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="long" ng-click="showMap()"
                                    ng-model="model.longitude" placeholder="Click here..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamat" rows="3" ng-model="model.alamat"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <select id="kecamatan" class="form-control"
                                    ng-options="item as item.nama for item in kecamatans" ng-model="kecamatan"
                                    ng-click="model.kecamatanid = kecamatan.id" required></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                            <div class="col-sm-10">
                                <select id="kelurahan" class="form-control"
                                    ng-options="item as item.nama for item in kecamatan.kelurahans" ng-model="kelurahan"
                                    ng-click="model.kelurahanid = kelurahan.id" required></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto"
                                            aria-describedby="inputGroupFileAddon01" ng-model="model.file"
                                            base-sixty-four-input ng-change="cekFile(model.file)">
                                        <label class="custom-file-label"
                                            for="foto">{{model.file ? model.file.filename: model.foto && !model.file ? model.foto: 'Pilih File'}}</label>
                                    </div>
                                    <span ng-show="form.model.file.$error.maxsize">Files must not exceed 5000 KB</span>
                                </div>
                                <small id="foto" class="form-text text-muted" ng-show="model.foto || model.file">
                                    ​<picture ng-if ="model.foto && !model.file">
                                        <source srcset="<?=base_url('public/img/galeri/{{model.foto}}')?>">
                                        <img src="<?=base_url('public/img/galeri/{{model.foto}}')?>"
                                            class="img-fluid img-thumbnail" alt="..." width="35%">
                                    </picture>
                                    ​<picture ng-if="model.file">
                                        <source>
                                        <img data-ng-src="data:{{model.file.filetype}};base64,{{model.file.base64}}"
                                            class="img-fluid img-thumbnail" alt="..." width="35%">
                                    </picture>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" rows="10" ng-model="model.deskripsi"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->

                <div class="modal fade" id="addLatLong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body" style="height: 416px; padding: 0px !important;">
                                <div id="mapp"></div>
                                <div id="geocoder" class="geocoder"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>