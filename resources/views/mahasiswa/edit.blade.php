<ul>
    @foreach($errors->all() as $row)
    <li>{{$row}}</li>
    @endforeach
</ul>


<form action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
   @method('put')
   @csrf
    <table>
        <tr>
            <td>First Name</td>
            <td>:</td>
            <td><input type="text" name="first_name" value="{{$mahasiswa->first_name}}"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><input type="text" name="last_name" value="{{$mahasiswa->last_name}}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" value="{{$mahasiswa->email}}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="30" rows="10" >{{$mahasiswa->alamat}}</textarea></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}"></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button></td>
        </tr>
    </table>
</form>