<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-30 align-items-center">
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDon" data-group="pge-title" data-delay="600">
                <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Student Search</h1>
                <div class="form-floating mb-4">
                    <input onkeyup='simpleAsyncSearch("functions/ajax.php", "student_search_input")' id="student_search_input" type="text" class="form-control" placeholder="Text Input">
                    <!-- line loader start -->
                    <div class="" id="line"></div>
                    <!-- line loader end-->
                    <label for="textInputExample">Registration Number</label>
                    <ul id="student_list">
                        <!-- <li data-dialog="somedialog" class="trigger" class="trigger student_item"> <a href="#">Item1</a> </li>
                        <li  class="student_item"><a href="#">Item1</a></li>
                        <li class="student_item"><a href="#">Item1</a></li>
                        </li> -->

                    </ul>
                    <!--/.accordion -->














                </div>
                <button onclick="setSearchBarLoader('line');">Set line loader</button>
            </div>
            <!-- /column -->
            <div class="col-lg-6" data-cue="slideInDon">
                <figure><img class="w-auto" src="assets/img/svg/undraw_people_search.svg" srcset="./assets/img/svg/undraw_people_search@2x.svg 2x" alt="Search Illustration" /></figure>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>