 <div ng-controller="wilayahController">
     <div class="col-lg-12">
         <div class="row">
             <div class="col-sm-5">
                 <div class="card card-warning">
                     <div class="card-header">
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Tambah Kecamatan</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <form role="form" ng-submit="save(model, 'kecamatan')">
                             <div class="form-group row">
                                 <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control" id="kecamatan" ng-model="model.nama"
                                         placeholder="Nama Kecamatan" required>
                                 </div>
                             </div>
                             <div class="form-group d-flex">
                                 <button class="btn btn-secondary btn-sm mr-auto p-2" ng-click="clear()">Clear</button>
                                 <button type="submit" class="btn btn-primary btn-sm p-2">Simpan</button>
                             </div>
                         </form>
                     </div>
                     <!-- /.card-body -->

                 </div>
             </div>
             <div class="col-sm-7">
                 <div class="card card-warning">
                     <div class="card-header">
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Data Kecamatan/Distrik</h3>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive" style="height: 200px">
                             <table class="table table-sm table-hover table-bordered">
                                 <thead>
                                     <tr>
                                         <th class="text-center" style="width: 7%;">No</th>
                                         <th class="text-center">Kecamatan</th>
                                         <th class="text-center" style="width: 15%;"><i class="fa fa-gear"></i></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr ng-repeat="item in datas">
                                         <td>{{$index+1}}</td>
                                         <td>{{item.nama}}</td>
                                         <td class="d-flex justify-content-center">
                                            <button class="btn btn-info btn-sm" ng-click="setKelurahan(item.kelurahans, item.id)"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-warning btn-sm" ng-click = "edit(item, 'kecamatan')"><i class="fa fa-edit"></i></button>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-lg-12" ng-show="showKelurahan">
         <div class="row">
             <div class="col-sm-5">
                 <div class="card card-warning">
                     <div class="card-header">
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Tambah Kelurahan</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <form role="form" ng-submit="save(model1, 'Kelurahan')">
                             <div class="form-group row">
                                 <label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control" id="kelurahan" ng-model="model1.nama"
                                         placeholder="Nama Kelurahan" required>
                                 </div>
                             </div>
                             <div class="form-group d-flex align-items-end flex-column">
                                 <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                             </div>
                         </form>
                     </div>
                     <!-- /.card-body -->

                 </div>
             </div>
             <div class="col-sm-7">
                 <div class="card card-warning">
                     <div class="card-header">
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Data Kelurahan</h3>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive" style="height: 200px">
                             <table class="table table-sm table-hover table-bordered">
                                 <thead>
                                     <tr>
                                         <th class="text-center" style="width: 7%;">No</th>
                                         <th class="text-center">Kecamatan</th>
                                         <th class="text-center" style="width: 15%;"><i class="fa fa-gear"></i></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr ng-repeat="item in itemKelurahan">
                                         <td>{{$index+1}}</td>
                                         <td>{{item.nama}}</td>
                                         <td class="d-flex justify-content-center">
                                            <button class="btn btn-warning btn-sm" ng-click = "edit(item, 'kelurahan')"><i class="fa fa-edit"></i></button>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>