@include('layouts.header')

<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form>       
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >
                <i class="bi bi-person-add fs-3 me-1"></i>User register</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                Note:your details must match with your id 
            </span>
            <div class="container-fluid">
                <div  class="row">
                    <div class="col-md-6 ps-0 md-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 md-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control shadow-none">
                    
                    </div>
                    <div class="col-md-6 ps-0 md-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 md-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 ps-0 md-3">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 md-3">
                        <label class="form-label">Picture</label>
                        <input type="file" class="form-control shadow-none">
                    </div>
                    <div class="col-md-12 p-0 md-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control shadow-none" rows="1" ></textarea>
                    </div>
                    <div class="col-md-6 ps-0 md-3">
                        <label class="form-label">Pincode</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 ps-0 md-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 md-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>

                </div>
            </div>

            <div class="text-center mt-3">
            <btton type="submit" class="btn btn-dark shadow-none">register</btton>
            </div>

            </div>
        </form>

    </div>
  </div>
</div>
