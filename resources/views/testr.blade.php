<div class="container" style="border: 1px solid gray ; margin: 10px">
    <div class="row" style="direction: rtl">
        <div class="col-lg-6" >
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 300px !important;">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid"  >
    @for($i=0;$i<10;$i++)
        <div class="row" style="margin: 5px ">
            @for($j=0;$j<4;$j++)
                <div data-city="1" data-area="12" data-name="المدارس" class="col-md-3 point-parent" style="text-align: center;"><div class="point" style="background-image: url({{asset('Images/joac.png')}}); background-repeat: no-repeat; background-size: cover;"><div class="overlay"></div> <div class="point-content"><h3>مكتبة جلنار الذهبي للقرطاسية</h3> <p>صويلح اشارة الدوريات بجانب - قبل طلوع هافانا</p> <br> <p>0795101720 / 0795175176</p></div></div></div>

            @endfor

        </div>
    @endfor

</div>
