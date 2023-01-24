<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->



    <style type="text/css">

        .center
        {
            margin: auto;
            width: 80%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 150px;
            height: 150px;
        }

        .th_color
        {
            background: skyblue;
        }

        .th_design
        {
            padding: 30px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{session()->get('message')}}

                </div>
                    
                @endif
            
            <h2 class="font_size">All Report</h2>


            <table class="center">
                <tr class="th_color">
                    <th class="th_design">ID</th>
                    <th class="th_design">Name</th>
                    <th class="th_design">Progress</th>
                    <th class="th_design">Date</th>

                    <th class="th_design">Comment</th>
                    <th class="th_design">Submit</th>
                </tr>

             
                
            </table>

            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

  </body>
</html>