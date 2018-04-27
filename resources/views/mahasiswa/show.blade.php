@method('put')
   @csrf
    <table>
        <tr>
            <td>First Name</td>
            <td>:</td>
            <td>{{$mahasiswa->first_name}}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>:</td>
            <td>{{$mahasiswa->last_name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$mahasiswa->email}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                {{$mahasiswa->jenis_kelamin}}
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$mahasiswa->alamat}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{$mahasiswa->tanggal_lahir}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{$mahasiswa->agama_id}}</td>
        </tr>
    </table>