@extends('template.tampilanmenu')

@section('isiweb')

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                 <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a class="btn btn-primary" href="{{ Url('/obat') }}"> Input Obat</a>
                        <a class="btn btn-info" href="{{ Url('/pesanan') }}"> Pesanan Obat</a>

                    </div>

                    <div class="ibox-title">
                    	<div class="col-lg-12">
                    	<h2>List Obat Apotik</h2>
               			</div>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga (Rp.)</th>
                        <th>Aktion</th>
                    </tr>
                    </thead>
                    <tbody>
                    	 <?php $i = 1;?>
                    @foreach($list_obat as $baris)
                    <tr class="gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $baris->kode_obat }}</td>
                        <td>{{ $baris->nama_obat }}</td>
                        <td>{{ $baris->jenis_obat }}</td>
                        <td>{{ $baris->harga }}</td>
                        <td>
                            <form method="post" action="{{ Url('/hapus_obat') }}">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                              <input type="hidden" name="id" value="{{ $baris->id }}"/>
                                <button class="btn btn-danger btn-sm demo4"  onclick ="return confirm('Apakan anda ingin menghapus {{$baris->nama_obat}}')" >Delete</button>
                            
                             <div class="col-md-4">
                            <a data-toggle="modal" class="btn btn-info btn-sm demo4" href="#modal-form-{{ $baris->id }}">Update</a>
                            </div> 
                            </form>

                                                    <!-- pop up update,form update-->
                            <div id="modal-form-{{ $baris->id }}" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Data Pasien</h3>

                                                   

                                                <form enctype="multipart/form-data" role="form" method="post" action="{{ Url('/proses_update_obat') }}" class="form-horizontal">
                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                         <input type="hidden" name="id" value="{{ $baris->id }}"/>

                                                        <div class="row">
                                                            <div class="col-md-3">
                                                            <label class="control-label">Kode</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                        <input value="{{ $baris->kode_obat }}" style="width:100%" type="text" name="kode_obat" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                            <label class="control-label">Nama Obat</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                        <input value="{{ $baris->nama_obat }}" style="width:100%" type="text" name="nama_obat" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                            <label class="control-label">Jenis Obat</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                       <select style="width: 50%;" name="jenis_obat" class="form-control">
                                                            <option value="Parasetamol"> Parasetamol </option>
                                                            <option value="salep"      > Salep       </option>
                                                            <option value="antibakteri"> Anti Bakteri</option>
                                                            <option value="dll">Dll</option>
                                                            <p style="color: red;">{{ $errors->first('type') }}</p>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-3">
                                                            <label class="control-label">Harga</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                        <input value="{{ $baris->harga }}" style="width:100%" type="text" name="harga" required="" class="form-control"/>
                                                        </div>
                                                    </div>

                                                    <br/>

                                                        <div> 
                                                            <button class="btn btn-primary btn-sm demo4"  onclick ="return confirm('Apakan anda ingin mengubah {{$baris->nama_obat}}, jenis obat : {{$baris->jenis_obat}} harga : {{$baris->harga}}')" >Update</button>
                                                        </div>
                                                </form>
                                                
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        </td>
                         <?php $i++ ?>
                    </tr>
                   @endforeach
            </tbody>
                    <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga (Rp.)</th>
                        <th>Aktion</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

@endsection()