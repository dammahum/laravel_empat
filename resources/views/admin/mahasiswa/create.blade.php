@extends('admin.layouts.app')
          
           
@section('content')
            <ul>
                @foreach($errors->all() as $row)
                <li>{{$row}}</li>
                @endforeach
            </ul>      
                  
             <form role="form" action="{{route('mahasiswa.store')}}" method="post">
              <div class="box-body">
               
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Masukkan First Name">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Masukkan Last Name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                  <div class="input-group">                        
                    <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                  </div>
                  <div class="input-group">                        
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Format (yyyy-mm-dd)">
                </div>
                <div class="form-group">
                  <label for="agama_id">Agama</label>
                  <input type="text" class="form-control" id="agama_id" name="agama_id" placeholder="Masukkan Agama ...">
                </div>
                
              </div>
              {{csrf_field()}}
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
@endsection