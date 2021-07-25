<div ng-controller="kategoriController">
     <div class="col-lg-12">
         <div class="row">
             <div class="col-sm-5">
                 <div class="card card-warning">
                     <div class="card-header">
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Tambah Kategori</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <form role="form" ng-submit="save(model)">
                             <div class="form-group row">
                                 <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                                 <div class="col-sm-9">
                                     <input type="text" class="form-control" id="kategori" ng-model="model.nama"
                                         placeholder="Nama kategori" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="warna" class="col-sm-3 col-form-label">Warna</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control my-colorpicker1" id="warna" ng-model="model.warna"
                                         placeholder="Warna warna" required>
                                 </div>
                             </div>
                             <div class="form-group d-flex">
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
                         <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Data Kategori</h3>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-sm table-hover table-bordered">
                                 <thead>
                                     <tr>
                                         <th class="text-center" style="width: 7%;">No</th>
                                         <th class="text-center">kategori</th>
                                         <th class="text-center">warna</th>
                                         <th class="text-center" style="width: 15%;"><i class="fa fa-gear"></i></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr ng-repeat="item in datas">
                                         <td>{{$index+1}}</td>
                                         <td>{{item.nama}}</td>
                                         <td>{{item.warna}}</td>
                                         <td class="d-flex justify-content-center">
                                            <button class="btn btn-warning btn-sm" ng-click = "edit(item)"><i class="fa fa-edit"></i></button>
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