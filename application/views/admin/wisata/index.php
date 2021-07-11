 <div ng-controller="wisataController">
     <div class="row">
         <div id="map"></div>
         <div class="col-lg-12">

             <div class="card card-warning">
                 <div class="card-header">
                     <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Daftar Wisata</h3>
                     <div class="card-tools">
                         <a href="<?=base_url('admin/wisata/tambah')?>" class="btn btn-primary btn-sm">Tambah</a>
                     </div>
                 </div>
                 <div class="card-body">
                     <table class="table table-sm table-hover table-bordered">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Wisata</th>
                                 <th>Lat</th>
                                 <th>Long</th>
                                 <th>Alamat</th>
                                 <th><i class="fa fa-gear"></i></th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr ng-repeat = "item in datas">
                                 <td>{{$index+1}}</td>
                                 <td>{{item.nama}}</td>
                                 <td>{{item.latitude}}</td>
                                 <td>{{item.longitude}}</td>
                                 <td>{{item.alamat}}</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>