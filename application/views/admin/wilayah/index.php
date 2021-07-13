 <div ng-controller="wilayahController">
     <div class="row">
         <div id="map"></div>
         <div class="col-lg-12">

             <div class="card card-warning">
                 <div class="card-header">
                     <h3 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Wilayah User</h3>
                     <!-- <div class="card-tools">
                         <a href="<?=base_url('admin/umkm/tambah')?>" class="btn btn-primary btn-sm">Tambah</a>
                     </div> -->
                 </div>
                 <div class="card-body">
                     <table class="table table-sm table-hover table-bordered">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Kecamatan</th>
                                 <th><i class="fa fa-gear"></i></th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr ng-repeat = "item in datas">
                                 <td>{{$index+1}}</td>
                                 <td>{{item.nama}}</td>
                                 <td>{{item.username}}</td>
                                 <td>{{item.email}}</td>
                                 <td>{{item.role}}</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>