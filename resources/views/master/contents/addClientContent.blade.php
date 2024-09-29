<div class="bg-white h-full w-75 mx-auto py-4 px-3 rounded-2">
    <div class="py-2 fw-bolder fs-3">Add a client</div>

    <form class="py-3 " enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col">
                {{-- <label for="firstName" class="form-label">First Name</label> --}}
              <input type="text" id="firstName" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                {{-- <label for="lastName" class="form-label">Last Name</label> --}}
              <input type="text" id="lastName" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">photo</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>

        <div class="py-2 fw-bolder fs-4">client Qualification</div>

        
        <div class="row mb-3 gap-0">
            <div class="col-md-2">
                <input type="text" class="form-control mx-1 bg-success-subtle" id="inputCity" value="SSC" readonly disabled>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Gpa 5.00">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Year">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Institute">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Doard">
            </div>
        </div>
        <div class="row mb-3 gap-0">
            <div class="col-md-2">
                <input type="text" class="form-control mx-1 bg-success-subtle" id="inputCity" value="HSC" readonly disabled>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Gpa 5.00">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Year">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Institute">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Doard">
            </div>
        </div>
        <div class="row mb-3 gap-0">
            <div class="col-md-3">
                <input type="text" class="form-control mx-1 bg-success-subtle" id="inputCity" value="Graduation" readonly disabled>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="CGpa 4.00">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Year">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Institute">
            </div>
        </div>
        <div class="row mb-3 gap-0">
            <div class="col-md-3">
                <input type="text" class="form-control mx-1 bg-success-subtle" id="inputCity" value="Post Grad" readonly disabled>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="CGpa 4.00">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Year">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control mx-1" id="inputCity" placeholder="Institute">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
