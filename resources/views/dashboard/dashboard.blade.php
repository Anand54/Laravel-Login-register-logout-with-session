@include('header')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Welcome to Dashboard</h4>
            <hr>
            <table class="table">
                <thead>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Action</th>
                </thead>
                <tbody>
                    <td >{{$data->username}}</td>
                    <td >{{$data->email}}</td>
                    <td ><a href="logout" class="ms-3">Logout</a></td>
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('footer')