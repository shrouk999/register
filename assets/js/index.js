$("#SearchForm").submit(function (e){
    e.preventDefault();

    let dataForm = new FormData(this);

    $.ajax({
        url: "back/search.php",
        type: "POST",
        data: dataForm,
        success: function(data){
            showStudents(data);
        },
        error: function (error){
            //console.log(error);

            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: error['responseJSON']['message']
                
                });
        },
    });
});

function showStudents(students){
    $("tbody").html("");

    let tbodyContent = "";

    for(let i=0; i < students.length; i++){
        let shortPass = students[i]['password'].slice(0,15);
        tbodyContent += `
        <tr data-student-id='${students[i]['id']}'>
            <th>${students[i]['id']}</th>
            <td>${students[i]['first_name']} ${students[i]['last_name']}</td>
            <td>${students[i]['email']}</td>
            <td>${shortPass}</td>
            <td>${students[i]['age']}</td>
            <td>${students[i]['phone']}</td>
            <td>
                <div class='buttons'>
                    <button class="btn btn-info text-light">Edit</button>
                    <button class="btn btn-danger text-light"  onclick='deleteStudent(${students[i]['id']})'>Delete</button>
                </div>
            </td>

    </tr>
        `
    }

    $("tbody").html(tbodyContent);
}

function deleteStudent(student_id){
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {

              let dataForm = {
                "student_id" : student_id
              };

                $.ajax({
                    url: "back/deleteStudent.php",
                    type: "POST",
                    data: dataForm,
                    success: function(data){
                        $(`tr[data-student-id="${student_id}"]`).remove();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Student has been deleted.",
                            icon: "success"
                        });
                    
                    },
                    error: function (error){
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: error['responseJSON']['message']
                            
                            });
                        
                    },
                });
            
        }
        });
}

