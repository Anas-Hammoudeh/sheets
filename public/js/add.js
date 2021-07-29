$(document).ready(function () {

    var html = "";
    $("#addnew").click(function () {
        var today = new Date();

        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
       html+=<form action="url('viewsheet')">
           <tr>
               <td> <input value={date} type="text" name="date"/>  </td>
               <td> <input type="text" name="emp_name"/> </td>
               <td> <input type="text" name="student_name"/> </td>
               <td> <input type="text" name="phone_no"/></td>
               <td> <input type="text" name="issue"/></td>
               <td><input type="text" name="resp_emp"/> </td>
               <td> <input type="text" name="notes"/></td>
               <td><input type="text" name="status"/> </td>
               <td> <button type="submit"></button> </td>
           </tr>
       </form>;


    })

    $("#save").click(function (){


    })
})
