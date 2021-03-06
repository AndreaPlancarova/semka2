$(document).ready(function(){

    // Fetch all records
    $('#but_fetchall').click(function(){
        fetchRecords(0);
    });

    // Search by userid
    $('#but_search').click(function(){
        var userid = Number($('#search').val().trim());

        if(userid > 0){
            fetchRecords(userid);
        }

    });

});

function fetchRecords(id){
    $.ajax({
        url: 'getUsers/'+id,
        type: 'get',
        dataType: 'json',
        success: function(response){

            var len = 0;
            $('#userTable tbody').empty(); // Empty <tbody>
            if(response['data'] != null){
                len = response['data'].length;
            }

            if(len > 0){
                for(var i=0; i<len; i++){
                    var id = response['data'][i].id;
                    var username = response['data'][i].username;
                    var name = response['data'][i].name;
                    var email = response['data'][i].email;

                    var tr_str = "<tr>" +
                        "<td align='center'>" + (i+1) + "</td>" +
                        "<td align='center'>" + username + "</td>" +
                        "<td align='center'>" + name + "</td>" +
                        "<td align='center'>" + email + "</td>" +
                        "</tr>";

                    $("#userTable tbody").append(tr_str);
                }
            }else{
                var tr_str = "<tr>" +
                    "<td align='center' colspan='4'>No record found.</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
}
