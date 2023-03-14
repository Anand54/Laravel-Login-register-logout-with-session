@include('header')

<form class=" container mt-3 p-2">
  <div class="card">
  <div class="text-center mt-3 mb-3 fw-bold">
    <span class="fs-4">Contact Form</span>
  </div>
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <textarea type="password" class="form-control" id="exampleInputPassword1" maxlength="200"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
  </div>
</form>

@include('footer')