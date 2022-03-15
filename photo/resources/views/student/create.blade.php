<div class="container">

    <h1>add image<h1>

            <a href="{{url('add-students')}}" class="btn btn-danger"> back </a>


            <form action="{{url('add-student')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="div">
                    <label>Student name </label>
                    <input type="text" name="name">
                </div>

                <div class="div">
                    <label>Email </label>
                    <input type="text" name="email">
                </div>

                <div class="div">
                    <label>course </label>
                    <input type="text" name="course">
                </div>

                <div class="div">
                    <label>Student Profil image </label>
                    <input type="file" name="profile_image">
                </div>

                <button type="submit">Save</button>
            </form>


            <div>