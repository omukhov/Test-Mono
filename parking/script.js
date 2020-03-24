

$(document).ready(function()
{
    var i = 1;
    $("#click").click(function()
    {

        var after = document.getElementById("after");

        var str = '<table class="table table-bordered" id="dynamic_field">\n' +
            '                <tr>\n' +
            '                    <td><input type="text" name="car['+ i +'][carmake]" id="carmake"><br></td>\n' +
            '                    <td><input type="text" name="car['+ i +'][model]" id="model" ><br></td>\n' +
            '                    <td><input type="text" name="car['+ i +'][color]" id="color"><br></td>\n' +
            '                    <td><input type="text" name="car['+ i +'][number]" id="number"><br></td>\n' +
            '                    <td><input type="radio" name="car['+ i +'][flag]" value="да" id="flag">да<br>\n' +
            '                        <input type="radio" name="car['+ i +'][flag]" value="нет" id="flag">нет<br></td>\n' +
            '                </tr>\n' +
            '            </table>';
        //div.insertAdjacentHTML('afterend', '<div><table class="table table-bordered" id="dynamic_field"><tr><td><input type="text" name="carmake"><br></td><td><input type="text" name="model" id="model" ><br></td><td><input type="text" name="color" id="color"><br></td><td><input type="text" name="number" id="number"><br></td><td><input type="radio" name="flag" value="да" id="flag">да<br><input type="radio" name="flag" value="нет" id="flag">нет<br></td></tr></table></div>');
        //after.append(str);

        after.innerHTML += str;
         //after.append('after');

    });
});

$(document).ready(function (){
    $("#remove").click(function () {

        $('#after').children().last().remove();


    })
})


jQuery(function($) {
    var items = $("#content tr");

    var numItems = items.length;
    var perPage = 2;

    // Only show the first 2 (or first `per_page`) items initially.
    items.slice(perPage).hide();

    // Now setup the pagination using the `#pagination` div.
    $("#pagination").pagination({
        items: numItems,
        itemsOnPage: perPage,
        cssStyle: "light-theme",

        // This is the actual page changing functionality.
        onPageClick: function(pageNumber) {
            // We need to show and hide `tr`s appropriately.
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;

            // We'll first hide everything...
            items.hide()
                // ... and then only show the appropriate rows.
                .slice(showFrom, showTo).show();
        }
    });
});