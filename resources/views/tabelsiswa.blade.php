<table class="table table-bordered table-striped bg-light">
  <thead>
    <tr>
      <th>No</th>
      <th>Laki-laki</th>
      <th>Perempuan</th>
      <th>Total</th>
      <th>KIP</th>
      <th>KKS</th>
      <th>PKH</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datasiswa as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->lakilaki }}</td>
        <td>{{ $item->perempuan }}</td>
        <td>{{ $item->total }}</td>
        <td>{{ $item->kip }}</td>
        <td>{{ $item->kks }}</td>
        <td>{{ $item->pkh }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
