<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SI.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Adress</th>
            <th scope="col">City</th>
            <th scope="col">Division</th>
            <th scope="col">zip</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $key=>$client)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $client->first_name . " " . $client->last_name }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->city }}</td>
            <td>{{ $client->division }}</td>
            <td>{{ $client->zip }}</td>
            <td class="d-flex gap-1 align-items-center justify-content-center h-full">
              <button type="button" class="btn btn-success px-2 py-1"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-danger px-2 py-1"><i class="bi bi-trash3-fill"></i></button>
              <button type="button" class="btn btn-info px-2 py-1"><i class="bi bi-eye-fill"></i></button>              
            </td>

          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>