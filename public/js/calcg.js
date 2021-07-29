function checkboxes(major) {
    var html = "";
    var commonCourses = ['تاريخ', 'عربي', 'لنجليزي', ' دين'];
    switch (major) {

        case 'علمي':
            var arr = ['رياضيات_ف1', 'رياضيات_ف2', 'فيزياء', 'كيمياء', 'احياء', 'علوم_ارض'];
            var html = "";

            for (var i = 0; i < arr.length; i++) {
               html+= '<div className="form-check">';
               html+='<input className="form-check-input" type="checkbox" value='+arr[i]+' id='+i+' >';
               html+='<label className="form-check-label" htmlFor='+i+'>';
               html+= arr[i];
               html+=' </label>';
               html+='</div>';
            }

            return html;




            break;


        case 'ادبي':
            var arr = ['رياضيات_ف1', 'رياضيات_ف2', 'عربي_تخصص', 'جغرافيا', ' حاسوب', ' ثقافة_مالية', 'علوم_اسلامية', 'تاريخ_العرب', 'مهارات_اتصال'];

            for (var i = 0; i < arr.length; i++) {
                html += ' <div class="col">\n' +
                    '    <input  value=' + arr[i] + ' type="checkbox" name="boxes"  id=' + i + '>\n' +
                    '    <label for="ch">\n' +
                    '        \n' + arr[i] +
                    '    </label>\n' +
                    '        </div>\n'
            }


            break;
        case 'زراعي':
            break;
        case 'صناعي':
            break;
        case 'فندقي':
            break;
        case 'شرعي':
            break;

    }

    for (var i = 0; i < commonCourses.length; i++) {
        html += ' <div class="col-md-6">\n' +
            '    <input  value=' + commonCourses[i] + ' type="checkbox" name="boxes"  id=' + (-i) + '>\n' +
            '    <label for="ch">\n' +
            '        \n' + commonCourses[i] +
            '    </label>\n' +
            '        </div>\n'
    }

    return html;
} // diplays the 4 courses that the student picks 3 from them
function records() {


    var html = "";

    var markedCheckbox = document.querySelectorAll('input[type="checkbox"]:checked');

    for (var checkbox of markedCheckbox) {

        html += "<tr> <td> " + checkbox.value + "</td> <td> <input class='marks' type='text' id=" + checkbox.value + ">" + "</td></tr>";
    } //this loop assign an id's for major courses and common courses


    return html;
}// displays the subject with the field to enter the mark for each subject
function calcmark() {

    var commoncourses = ['عربي', 'تاريخ', 'لنجليزي', 'دين'];
    var selectedcommoncourses = [];
    var majorCourses = [];


    marks = document.getElementsByClassName('marks');
    for (var mark of marks) {
        id = mark.getAttribute('id');

        if (commoncourses.includes(id)) {
            selectedcommoncourses.push(parseInt(document.getElementById(id).value));
        } else {
            majorCourses.push(mark.getAttribute('id'));
        }

    }

    divider= ((commoncourses.length-selectedcommoncourses.length)*2);

    var finalmar = 0;

    for (var i = 0; i < selectedcommoncourses.length; i++) {
        finalmar += parseInt(selectedcommoncourses[i]);
    }
alert(majorCourses);
  if(majorCourses.includes('رياضيات اول') || majorCourses.includes('رياضيات ثاني')){
      alert("yes");
  }





    return alert(finalmar);


}

