<br>
    <a href="{{route('mahasiswa.create')}}"> Create Article </a>
<br>
<br>

<table>
    <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jenis Kelamin</th>  
         <th>Tanggal Lahir</th>  
         <th>Agama</th>  
         <th>Aksi</th>  
    </tr>
    <?php
    $no = 1;
    ?>
@foreach($mahasiswa as $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->jenis}}</td>
        <td>{{$row->tanggal_lahir}}</td>
        <td>{{$row->agama_id}}</td>
        <td>
            <a href="{{route('mahasiswa.edit', $row->id)}}"> Edit </a>
            <a href="{{route('mahasiswa.show', $row->id)}}"> Detail </a>
            <form action="{{route('mahasiswa.destroy', $row->id)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table><br><br>