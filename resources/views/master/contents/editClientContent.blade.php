<div class="bg-white h-full w-75 mx-auto py-4 px-3 rounded-2">
    <div class="py-2 fw-bolder fs-3">Edit the client</div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="py-3 " enctype="multipart/form-data" action="{{ url('/client/'.$client->id) }}" method="POST">
        @csrf
        @method('PATCH')
        {{-- firstName & lastName --}}
        <div class="row mb-3">
            <div class="col">
                {{-- <label for="firstName" class="form-label">First Name</label> --}}
                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First name"
                    aria-label="First name" value="{{ $client->first_name }}">
                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
            </div>
            <div class="col">
                {{-- <label for="lastName" class="form-label">Last Name</label> --}}
                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name"
                    aria-label="Last name" value="{{ $client->last_name }}">
                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
            </div>
        </div>

        {{-- email --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $client->email }}">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- image --}}
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">photo</label>
            <input class="form-control" name="image" type="file" id="formFileMultiple">
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <div class="mb-3 ps-3">
            <img src="/clientImg/{{ $client->client_image }}" alt="" width="60" height="60">
        </div>
        {{-- adress --}}
        <div class="row mb-3">
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress2"
                    placeholder="Apartment, studio, or floor" value="{{ $client->address }}">
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
        </div>
        {{-- city & state & zip code --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" value="{{ $client->city }}">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">division</label>
                <select id="inputState" class="form-select" name="division">
                    <option disabled>Choose...</option>
                    <option value="Dhaka" {{ $client->division == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                    <option value="Chittagong" {{ $client->division == 'Chittagong' ? 'selected' : '' }}>Chittagong
                    </option>
                    <option value="Sylht" {{ $client->division == 'Sylht' ? 'selected' : '' }}>Sylht</option>
                    <option value="Khulna" {{ $client->division == 'Khulna' ? 'selected' : '' }}>Khulna</option>
                    <option value="Rangpur" {{ $client->division == 'Rangpur' ? 'selected' : '' }}>Rangpur</option>
                    <option value="Barishal" {{ $client->division == 'Barishal' ? 'selected' : '' }}>Barishal</option>
                    <option value="Rajshahi" {{ $client->division == 'Rajshahi' ? 'selected' : '' }}>Rajshahi</option>
                    <option value="Mymensingh" {{ $client->division == 'Mymensingh' ? 'selected' : '' }}>Mymensingh
                    </option>
                </select>
                <x-input-error :messages="$errors->get('division')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip" id="inputZip" value="{{ $client->zip }}">
                <x-input-error :messages="$errors->get('zip')" class="mt-2" />
            </div>
        </div>

        <div class="py-2 fw-bolder fs-4">client Qualification</div>

        {{-- ssc --}}
        <div class="row mb-3 gap-0">
            <div class="col-md-2">
                <input type="text" name="ssc" class="form-control mx-1 bg-success-subtle" id="ssc"
                    value="SSC" readonly>
            </div>
            <div class="col-md-2">
                <input type="text" name="sscGpa" class="form-control mx-1" id="sscGpa" placeholder="Gpa 5.00"
                    autocomplete="off" value="{{ $client->ssc->result }}">
                <x-input-error :messages="$errors->get('sscGpa')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" name="sscYear" class="form-control mx-1" id="sscYear" placeholder="Year"
                    autocomplete="off" value="{{ $client->ssc->passing_year }}">
                <x-input-error :messages="$errors->get('sscYear')" class="mt-2" />
            </div>
            <div class="col-md-4">
                <input type="text" name="sscInstitute" class="form-control mx-1" id="sscInstitute"
                    placeholder="Institute" autocomplete="off" value="{{ $client->ssc->institute }}">
                <x-input-error :messages="$errors->get('sscInstitute')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" name="sscBoard" class="form-control mx-1" id="sscBoard" placeholder="Board"
                    autocomplete="off" value="{{ $client->ssc->board }}">
                <x-input-error :messages="$errors->get('sscBoard')" class="mt-2" />
            </div>
        </div>
        {{-- hsc --}}
        <div class="row mb-3 gap-0">
            <div class="col-md-2">
                <input type="text" name="hsc" class="form-control mx-1 bg-success-subtle" id="hsc"
                    value="HSC" readonly>
            </div>
            <div class="col-md-2">
                <input type="text" name="hscGpa" class="form-control mx-1" id="hscGpa"
                    placeholder="Gpa 5.00" autocomplete="off" value="{{ $client->hsc->result }}">
                <x-input-error :messages="$errors->get('hscGpa')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" name="hscYear" class="form-control mx-1" id="hscYear" placeholder="Year"
                    autocomplete="off" value="{{ $client->hsc->passing_year }}">
                <x-input-error :messages="$errors->get('hscYear')" class="mt-2" />
            </div>
            <div class="col-md-4">
                <input type="text" name="hscInstitute" class="form-control mx-1" id="hscInstitute"
                    placeholder="Institute" autocomplete="off" value="{{ $client->hsc->institute }}">
                <x-input-error :messages="$errors->get('hscInstitute')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" name="hscBoard" class="form-control mx-1" id="hscBoard" placeholder="Board"
                    autocomplete="off" value="{{ $client->hsc->board }}">
                <x-input-error :messages="$errors->get('hscBoard')" class="mt-2" />
            </div>
        </div>
        {{-- graduation --}}
        <div class="row mb-3 gap-0">
            <div class="col-md-3">
                <input type="text" name="graduation" class="form-control mx-1 bg-success-subtle" id="graduation"
                    value="Graduation" readonly>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" name="graduationGpa" id="graduationGpa"
                    placeholder="CGpa 4.00" autocomplete="off" value="{{ $client->graduation->result }}">
                <x-input-error :messages="$errors->get('graduationGpa')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" name="graduationYear" id="graduationYear"
                    placeholder="Year" autocomplete="off" value="{{ $client->graduation->passing_year }}">
                <x-input-error :messages="$errors->get('graduationYear')" class="mt-2" />
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control mx-1" name="graduationInstitute" id="graduationInstitute"
                    autocomplete="off" placeholder="Institute" value="{{ $client->graduation->institute }}">
                <x-input-error :messages="$errors->get('graduationInstitute')" class="mt-2" />
            </div>
        </div>
        {{-- post graduation --}}
        <div class="row mb-3 gap-0">
            <div class="col-md-3">
                <input type="text" name="postGraduation" class="form-control mx-1 bg-success-subtle"
                    id="post-graduation" value="Post Graduation" readonly>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" name="postGraduationGpa" id="postGraduationGpa"
                    placeholder="CGpa 4.00" autocomplete="off" value="{{ $client->postGraduation->result }}">
                <x-input-error :messages="$errors->get('postGraduationGpa')" class="mt-2" />
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" name="postGraduationYear" id="postGraduationYear"
                    autocomplete="off" placeholder="Year" value="{{ $client->postGraduation->passing_year }}">
                <x-input-error :messages="$errors->get('postGraduationYear')" class="mt-2" />
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control mx-1" name="postGraduationInstitute"
                    id="postGraduationInstitute" placeholder="Institute" autocomplete="off"
                    value="{{ $client->postGraduation->institute }}">
                <x-input-error :messages="$errors->get('postGraduationInstitute')" class="mt-2" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
