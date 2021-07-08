<div ng-controller="tambahWisataController" ng-init="Init()">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning d-flex justify-content-between">
                    <h3>Daftar Wisata</h3>
                    <button class="btn btn-primary btn-sm">Tambah</button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="email@example.com" ng-click="showMap()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
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