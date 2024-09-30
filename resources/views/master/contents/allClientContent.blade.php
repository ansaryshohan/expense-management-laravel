<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (count($clients) <= 0)
        <div class="text-center fs-2 fw-bold text-danger"> No Clients added</div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adress</th>
                    <th scope="col">City</th>
                    <th scope="col">Division</th>
                    <th scope="col">Image</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $key => $client)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $client->first_name . ' ' . $client->last_name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $client->city }}</td>
                        <td>{{ $client->division }}</td>
                        <td><img src="/clientImg/{{ $client->client_image }}" alt="" width="50"
                                height="50"></td>
                        <td class="d-flex gap-1 align-items-center justify-content-center h-full">
                            <a href="{{ url('/client/' . $client->id . '/edit') }}">
                                <button type="button" class="btn btn-success px-2 py-1" title="edit Client"><i
                                        class="bi bi-pencil-square"></i></button>
                            </a>
                            {{-- delete btn --}}
                            <button type="submit" class="btn btn-danger px-2 py-1" title="delete Client"
                                form="delete-form"><i class="bi bi-trash3-fill"></i></button>

                            {{-- view button --}}
                            <a href="{{ url('/client/' . $client->id) }}">
                                <button type="button" class="btn btn-info px-2 py-1" title="view details"><i
                                        class="bi bi-eye-fill"></i></button>
                            </a>

                        </td>
                        {{-- delete form --}}
                        <form action="{{ url('/client/' . $client->id) }}" method="POST" id="delete-form"
                            class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>

                    </tr>
                @endforeach

            </tbody>
        </table>
    @endif
</div>
