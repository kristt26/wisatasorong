<div ng-controller="galeryController">
    <div class="col-12">
        <div class="card card-warning">
            <div class="card-header">
                <h4 class="card-title">Upload File Photo {{datas.lokasi.type}} {{datas.lokasi.nama}}</h4>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <form role="form" ng-submit="save(model)">
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Nama Foto</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kecamatan" ng-model="model.nama"
                                    placeholder="Nama Kecamatan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" accept="image/*"
                                            aria-describedby="inputGroupFileAddon01" ng-model="model.file" base-sixty-four-input
                                            ng-change="cekFile(model.file)" required>
                                        <label class="custom-file-label"
                                            for="filektpkernet">{{model.file ? model.file.filename: 'Pilih File'}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <!-- <button class="btn btn-secondary btn-sm mr-auto p-2" ng-click="clear()">Clear</button> -->
                            <button type="submit" class="btn btn-primary btn-sm p-2">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-warning">
            <div class="card-header">
                <h4 class="card-title">Galery Foto</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2" ng-repeat="item in datas.foto">
                        <a href="<?=base_url('public/img/galeri/{{item.file}}')?>" data-toggle="lightbox"
                            data-title="{{item.nama}}" data-gallery="gallery">
                            <img src="<?=base_url('public/img/galeri/{{item.file}}')?>" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>