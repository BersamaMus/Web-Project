<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div>
            <table class="table table-hover table-dark">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Specialty</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $doctor )


                  <tr>
                    <th scope="row">{{$doctor->name}}</th>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->specialty}}</td>
                    <td> <img style="max-width: 100%;max-height: 100%;"src="doctorimage/{{$doctor->image}}" alt=""></td>
                    <td><a class="btn btn-success" onclick="return confirm('Update this information?')"href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure? This cannot be undone!')"href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
        </div>



    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>
