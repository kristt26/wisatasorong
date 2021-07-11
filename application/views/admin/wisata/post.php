<div ng-controller="tambahWisataController">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning d-flex justify-content-between">
                    <h5>Tambah Wisata</h5>
                    <a href="<?=base_url('admin/wisata')?>" class="btn btn-secondary btn-sm"><i
                            class="fa fa-sign-in fa-lg fa-fw"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Wisata</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" ng-model="model.nama"
                                    placeholder="Nama Wisata">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lat" class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="lat" ng-click="showMap()"
                                    ng-model="model.latitude" placeholder="Click here...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="long" class="col-sm-2 col-form-label">Longitude</label>
                            <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="long" ng-click="showMap()"
                                    ng-model="model.longitude" placeholder="Click here...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamat" rows="10" ng-model="model.alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <select id="kecamatan" class="form-control"></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                            <div class="col-sm-10">
                                <select id="kelurahan" class="form-control"></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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