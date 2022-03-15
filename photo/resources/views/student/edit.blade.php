<div class="container">

    <h1>EDIT<h1>

            <a href="{{url('add-students')}}" class="btn btn-danger"> back </a>


            <form action="{{url('update-student/'.$student->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="div">
                    <label>Student name </label>
                    <input type="text" name="name" value="{{$student->name}}">
                </div>

                <div class="div">
                    <label>Email </label>
                    <input type="text" name="email" value="{{$student->email}}">
                </div>

                <div class="div">
                    <label>course </label>
                    <input type="text" name="course" value="{{$student->course}}">
                </div>

                <div class="div">
                    <label>Student Profil image </label>
                    <input type="file" name="profile_image">
                    <img src="{{ asset('uploads/students/'.$student->profile_image) }}" width="180px" alt="Image">
                </div>

                <button type="submit">update</button>
            </form>


            <div>