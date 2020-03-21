

$(document).ready(function()
{
    $("#click").click(function()
    {

            var after = document.getElementById("after");

              var str = '<table class="table table-bordered" id="dynamic_field">\n' +
                  '                <tr>\n' +
                  '                    <td><input type="text" name="carmake"><br></td>\n' +
                  '                    <td><input type="text" name="model" id="model" ><br></td>\n' +
                  '                    <td><input type="text" name="color" id="color"><br></td>\n' +
                  '                    <td><input type="text" name="number" id="number"><br></td>\n' +
                  '                    <td><input type="radio" name="flag" value="да" id="flag">да<br>\n' +
                  '                        <input type="radio" name="flag" value="нет" id="flag">нет<br></td>\n' +
                  '                </tr>\n' +
                  '            </table>';
            //div.insertAdjacentHTML('afterend', '<div><table class="table table-bordered" id="dynamic_field"><tr><td><input type="text" name="carmake"><br></td><td><input type="text" name="model" id="model" ><br></td><td><input type="text" name="color" id="color"><br></td><td><input type="text" name="number" id="number"><br></td><td><input type="radio" name="flag" value="да" id="flag">да<br><input type="radio" name="flag" value="нет" id="flag">нет<br></td></tr></table></div>');
            after.innerHTML += str;


      //  after.append('after');

    });
});


$(document).ready(function (){
    $("#remove").click(function () {

        $('#after').children().last().remove();


    })
})


