<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employee</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/JavaScript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
    <style>
        body {
            font-size: 16px !important;
        }

        th {
            text-align: right;
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: bold !important;
            font-style: unset !important;
            font-size: unset !important;
            line-height: unset !important;
            letter-spacing: unset !important;
            text-transform: unset !important;
            display: unset !important;
            white-space: unset !important;
            word-wrap: unset !important;
            direction: unset !important;
            -webkit-font-feature-settings: unset !important;
            -webkit-font-smoothing: unset !important;
        }

        .container {
            margin-bottom: 75px;
        }
        *{
            font-family: 'Cairo', sans-serif;
        }

        .material-icons:hover {
            cursor: pointer;
        }


        #date {
            width: 87px;
            padding: 3px;
        }

        .smallInput {
            width: 105px;
            padding: 5px;
        }

        textarea {
            min-width: 100px;
            min-height: 34px;
            max-width: 250px;
            max-height: 100px;
        }
        .modal-body{
            font-size: 16px;
            text-align: center;
            overflow-wrap: anywhere;
        }
        .modal-title{
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        td,th{
            text-align: center;
        }
        .notes:hover,.replys:hover{
            cursor: pointer;
            background-color: rgba(255, 0, 0, 0.4);;
        }
    </style>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="">
@if(session()->has('success'))
    <div class="alert alert-success tempAlert">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('failed'))
    <div class="alert alert-danger tempAlert">
        {{ session()->get('failed') }}
    </div>
@endif
<div class="container">
    <form method="get" action="{{url('insert')}} " enctype="multipart/form-data" id="form1"></form>
        <table id="myTable" class="table table-bordered table-striped table-hover">

            <thead>
            <tr style=" background-color: lightgoldenrodyellow;">
                <th>التاريخ<i class="material-icons" onclick="sortTable(0)">arrow_drop_down</i></th>
                <th>اسم الموظف<i class="material-icons" onclick="sortTable(1)">arrow_drop_down</i></th>
                <th>اسم/ايميل الطالب<i class="material-icons" onclick="sortTable(2)">arrow_drop_down</i></th>
                <th>رقم الهاتف</th>
                <th>المشكلة</th>
                <th>الشخص المعني<i class="material-icons" onclick="sortTable(5)">arrow_drop_down</i></th>
                <th>ملاحظات</th>
                <th>الحالة<i class="material-icons" onclick="sortTable(7)">arrow_drop_down</i></th>
                <th>الردود</th>
                <th>تعديل/حذف</th>
            </tr>
            </thead>
            <tbody id="tbody">
            @foreach($data as $record)
                <tr id="{{$record->id}}">

                    <td>{{$record->created_at}}</td>
                    <td>{{$record->emp_name}}</td>
                    <td>{{$record->student_name}}</td>
                    <td>{{$record->phone_no}}</td>
                    <td>{{$record->issue}}</td>
                    <td>{{$record->resp_emp}}</td>
                    <td class="notes" onclick="showNotes('{{$record->notes}}')">فتح</td>
                    <td class="statusColor">{{$record->status}}</td>
                    <td class="replys" onclick="getReplies({{$record->id}})" >{{$record->notes2}}</td>
                    <td>
                        <div style="display: flex">
                            <button class="btn btn-info" onclick="edit(this,{{$record->id}})"><i
                                    class="material-icons">edit</i></button>
                            <!-- Button trigger modal -->
                            <a id="transferAnchor" onclick="return confirm('Are you sure?')" href="{{url('delete'.'/'.$record->id.'/'.$record->resp_emp.'/'.$record->emp_name)}}" type="button" class="btn btn-danger" >
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach


            </tbody>
            <tfoot id="tfoot">
            <tr id="newRecord">

                <td>
                    <input id="date" name="date" type="text" class="form-control" form="form1" placeholder="التاريخ" disabled>
                </td>
                <td>
                    <input value="{{$currentuser}}" type="text" class="form-control smallInput" disabled>
                    <input value="{{$currentuser}}" name="employeeName" form="form1" id="employeeName" type="text"
                           class="form-control"
                           placeholder="اسم الموظف" style="display: none">
                </td>


                <td>
                    <input name="studentName" id="studentName" type="text" form="form1" class="form-control"
                           style="width: 135px;padding: 5px"
                           placeholder="اسم الطالب">
                </td>

                <td>
                    <input name="phone" id="phone" maxlength="10" type="text" form="form1" class="form-control smallInput"
                           placeholder="رقم الهاتف">
                </td>
                <td>
                    <input name="problem" id="problem" type="text" form="form1" class="form-control smallInput"
                           placeholder="المشكلة">
                </td>
                <td>
                    <select dir="rtl" name="targetPerson" form="form1" id="targetPerson" class="form-control" style="width: 121px">
                        <option style="display: none">أختر</option>
                        <option value="حسام">حسام</option>
                        <option value="شروق">شروق</option>
                        <option value="سارة">سارة</option>
                        <option value="مجد">مجد</option>
                    </select>
                </td>
                <td>
                    <textarea name="notes" id="notes" form="form1" class="form-control" placeholder="ملاحظات"></textarea>
                </td>
                <td>

                    <input value="انتظار" type="text" class="form-control smallInput" disabled>
                    <input value="انتظار" name="status" form="form1" id="status" type="text"
                           class="form-control"
                           placeholder="اسم الموظف" style="display: none">
                </td>
                <td>

                    <input name="replys" id="replys" form="form1" class="form-control" value="الردود" disabled >
                </td>

                <td class="text-center">
                    <button class="btn btn-success" onclick="submitAddForm()">اضافة
                    </button>
                </td>

            </tr>
            </tfoot>
        </table>
    <form action="{{url('edit')}}" method="get" id="form2"></form>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close modalIcon" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true" class="closed">&times;</span>
                    </button>
                    <h4 class="modal-title modalTitle" id="modalTitle">هل انت متأكد؟</h4>
                </div>
                <div class="modal-body" id="modalBody">
                    سوف يتم الحذف نهائيا!!
                </div>
                <div class="modal-footer" id="modalFoorter">

                    <button class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="replyModal"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close modalIcon" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true" class="closed">&times;</span>
                    </button>
                    <h3 class="modal-title" >الردود</h3>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <th>التاريخ</th>
                        <th>اسم الموظف</th>
                        <th>الرد</th>
                        </tr>
                        </thead>
                        <tbody id="replyBody">
                        <tr>
                        <td>18/7</td>
                        <td>mohammad</td>
                        <td>some information</td>
                        </tr>
                        <tr>
                        <td>18/7</td>
                        <td>mohammad</td>
                        <td>some information</td>
                        </tr>
                        </tbody>
                        <tfoot></tr>
                        </tfoot>
                    </table>

                    <div class="row">
                        <form id="replyForm" action="{{url('addreply')}}">
                            <input name="ticket_id" type="text" id="getTicketId" style="display: none" >
                        </form>


                        <div class="col-md-2">
                            <button type="submit" form="replyForm" class="btn btn-success">اضافة</button>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" form="replyForm" name="reply" id="newReply" placeholder="اكتب ردك" >
{{--                            <input name="ticket_id" value="{{$record->id}}" style="display: none">--}}
                        </div>
                        <div class="col-md-2">
                            <label for="newReply">اضافة رد</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">الغاء</button>
                </div>
            </div>
        </div>
    </div>



</div>

<script>
    function getReplies(ticket_id){
        $("#replyBody").empty();
        $.ajax({
            url:'{{route('getreplies')}}',
            data:{'tik_id':ticket_id},
            type:'get',
            success:function (data){
                for(i=0;i<data.length;i++){


                    $("#replyBody").append('<tr><td>'+data[i].created_at+'</td><td>'+data[i].emp_name+'</td><td>'+data[i].reply+'</td>');
                }


                $("#replyModal").modal("show");
                // $("getTicketId").setAttribute('value',ticket_id);
document.getElementById('getTicketId').setAttribute('value',ticket_id);
            }

        })

    }


    $(document).ready(function () {

        setTimeout(function(){
            $('.tempAlert').remove();
        }, 5000);
        $('.statusColor').each(function (){
            if($(this).text()==="تم الحل"){
                $(this).css("background-color","#00ff00");
                $(this).css("font-size","15px");
                $(this).css("font-weight","bold");
                $(this).css("text-align","center");
            }else if($(this).text()==="قيد المتابعة"){
                $(this).css("background-color","#ffff00");
                $(this).css("font-size","15px");
                $(this).css("font-weight","bold");
                $(this).css("text-align","center");
            }else if($(this).text()==="لا يوجد حل"){
                $(this).css("background-color","#ff0000");
                $(this).css("font-size","15px");
                $(this).css("font-weight","bold");
                $(this).css("text-align","center");
            }else if($(this).text()==="متابعة من الدعم الفني"){
                $(this).css("background-color","#0073ff");
                $(this).css("font-size","15px");
                $(this).css("font-weight","bold");
                $(this).css("text-align","center");
            }else{
                $(this).css("background-color","unset");
                $(this).css("font-size","15px");
                $(this).css("font-weight","bold");
                $(this).css("text-align","center");
            }
        });
        // if($('.statusColor').childElementCount(0))

    });

    targetpersonName = ["حسام", "ديمة", "شروق", "مجد"];
    statusInfo = ["تم الحل", "قيد المتابعة", "لا يوجد حل", "متابعة من الدعم الفني"];

    function edit(e, id) {

        tr = e.parentElement.parentElement.parentElement.children;
        rowd = document.getElementById(id).outerHTML;

        names = ['id', 'date', 'employeeName', 'studentName', 'phone', 'problem', 'targetPerson', 'notes', 'status', 'notes2'];
        data = [];
        html = "<td style='display: none'><input form='form2' name='" + names[0] + "' type='text' class='form-control' value='" + id + "'></td>";

        for (i = 1; i < tr.length;) {
            cont = tr[i].textContent;
            data.push(tr[i].textContent);
            names.shift();
            if (names[i] === "employeeName") {
                html += '<td>' +
                    '<input value="' + cont + '" type="text" class="form-control smallInput" disabled>' +
                    '<input value="' + cont + '" name="employeeName" form="form2" id="employeeName" type="text" ' +
                    'class="form-control" ' +
                    'placeholder="اسم الموظف" style="display: none">' +
                    '</td>';
            } else if (names[i] === "targetPerson") {
                html += ' <td> ' +
                    '<select dir="rtl" name="targetPerson" form="form2" id="targetPerson" class="form-control" style="width: 100px">' +

                    '<option value="' + cont + '">' + cont + '</option>';
                ////////// remove selected

                const index = targetpersonName.indexOf(cont);
                if (index > -1) {
                    targetpersonName.splice(index, 1);
                }
                for (j = 0; j < targetpersonName.length; j++) {
                    html += '<option value="' + targetpersonName[j] + '">' + targetpersonName[j] + '</option>';
                }
                html += '</select>' + '</td>';
            } else if (names[i] === "status") {

                html += ' <td> ' +
                    '<select dir="rtl" name="status" form="form2" id="status" class="form-control" style="width: 100px">' +

                    '<option value="' + cont + '">' + cont + '</option>';

                ////////// remove selected
                const indexs = statusInfo.indexOf(cont);
                if (indexs > -1) {
                    statusInfo.splice(indexs, 1);
                }

                for (j = 0; j < statusInfo.length; j++) {
                    html += '<option value="' + statusInfo[j] + '">' + statusInfo[j] + '</option>';
                }
                html += '</select>' + '</td>';
            } else if (names[i] === "notes") {
                html += ' <td> ' +
                    ' <textarea name="notes" form="form2" id="notes" class="form-control" ' +
                    '  placeholder="ملاحظات">' + cont + '</textarea> ' +
                    '</td>';
            } else if (names[i] === "notes2") {
                html += ' <td> ' +
                    ' <textarea name="notes2" form="form2" id="notes2" class="form-control" ' +
                    '  placeholder="2 ملاحظات">' + cont + '</textarea> ' +
                    '</td>';
            } else {
                html += "<td><input form='form2' name=" + names[i] + " type='text' class='form-control' value='" + cont + "'></td>";
            }
            tr[i].remove();
            if (i == tr.length - 1)
                tr[i].remove();
        }
        idd = "#" + id + "";
        html += '<td><div style="display: flex"><button form="form2" type="submit" href="" class="btn btn-primary">موافق</button><button onclick="cancelEdit(idd,rowd)" class="btn btn-default">الغاء</button></div></td>';
        $("#" + id + "").append(html);
    }

    function cancelEdit(idd, oldData) {
        $(idd).empty();
        idd = idd.replace('#','');
        oldData = oldData.replace('<tr id="'+idd+'">', '');
        oldData = oldData.replace('</tr>', '');
        $('#'+idd).append(oldData);
    }

    function submitAddForm(){
        if($('#studentName').val()===""){
            $('#modalTitle').html("خطأ");
            $('#modalTitle').css("color","red")
            $('#modalBody').html("عليك اضافة اسم/ايميل الطالب")
            $('#modalFoorter').html('<button type="button" class="btn btn-primary" data-dismiss="modal">موافق</button>');
            $('#myModal').modal('show');
        }
        else {
            $('#form1').submit();
        }
    }

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 2); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }

    function showNotes(notes){
        $('#modalTitle').html("الملاحظات");
        if(notes === undefined){
            $('#modalBody').html("لا يوجد");
        }else{
            $('#modalBody').html(notes);
        }

        $('#modalFoorter').html('<button type="button" class="btn btn-primary" data-dismiss="modal">موافق</button>');
        $('#myModal').modal('show');
    }

</script>
</body>
</html>


